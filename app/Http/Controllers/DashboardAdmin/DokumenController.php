<?php

namespace App\Http\Controllers\DashboardAdmin;

use App\Models\Dokumen;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreDokumenRequest;
use App\Http\Requests\UpdateDokumenRequest;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokumen = Dokumen::latest()->get();
        return view('dashboard-admin.dokumen.index', compact('dokumen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard-admin.dokumen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDokumenRequest $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'pdf' => 'required|file|mimes:pdf'
        ]);

        $validateData['slug'] = SlugService::createSlug(Dokumen::class, 'slug', $validateData['title']);

        $validateData['hits'] = 0;

        if ($request->hasFile('pdf')) {
            $pdfFileName = $request->file('pdf')->store('file-dokumen');
            $validateData['pdf'] = $pdfFileName;
        }

        Dokumen::create($validateData);

        // Menampilkan notifikasi sukses dan redirect
        toast()->success('Berhasil', 'Dokumen Berhasil ditambahkan');
        return redirect('/dashboard/dokumen')->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(Dokumen $dokumen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $dokumen = Dokumen::where('slug', $slug)->firstOrFail();

        return view('dashboard-admin.dokumen.edit', compact('dokumen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDokumenRequest $request, $slug)
    {
        $dokumen = Dokumen::where('slug', $slug)->firstOrFail();

        try {
            $rules = [
                'title' => 'required|max:255',
                'pdf' => 'file|mimes:pdf'
            ];

            $validateData = $request->validate($rules);

            $validateData['slug'] = SlugService::createSlug(Dokumen::class, 'slug', $validateData['title']);

            // Handle pdf update
            if ($request->hasFile('pdf')) {
                if ($dokumen->pdf) {
                    // Delete old pdf
                    Storage::delete($dokumen->pdf);
                }
                // Store new pdf in storage
                $validateData['pdf'] = $request->file('pdf')->store('file-dokumen');
            } else {
                // Keep old pdf if no new pdf is uploaded
                $validateData['pdf'] = $dokumen->pdf;
            }

            $dokumen->update($validateData);

            alert()->success('Berhasil', 'Dokumen berhasil diubah');
            return redirect('/dashboard/dokumen')->withInput();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $dokumen = Dokumen::where('slug', $slug)->firstOrFail();

        if ($dokumen->pdf) {
            Storage::delete($dokumen->pdf);
        }

        Dokumen::destroy($dokumen->id);

        alert()->success('Success', 'Dokumen berhasil dihapus');
        return redirect('/dashboard/dokumen')->withInput();
    }
}
