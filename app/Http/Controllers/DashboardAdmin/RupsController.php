<?php

namespace App\Http\Controllers\DashboardAdmin;

use App\Models\Rups;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRupsRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateRupsRequest;
use Cviebrock\EloquentSluggable\Services\SlugService;

class RupsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rups = Rups::latest()->get();
        return view('dashboard-admin.rups.index', compact('rups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard-admin.rups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRupsRequest $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'pdf' => 'required|file|mimes:pdf,jpeg,png,jpg,gif|max:4096',  // 4MB
        ]);

        $validateData['slug'] = SlugService::createSlug(Rups::class, 'slug', $validateData['title']);

        // Menyimpan file buku PDF ke storage
        if ($request->hasFile('pdf')) {
            $pdfFileName = $request->file('pdf')->store('file-pengaduan');
            $validateData['pdf'] = $pdfFileName;
        }

        Rups::create($validateData);

        // Menampilkan notifikasi sukses dan redirect
        toast()->success('Berhasil', 'RUPS Berhasil ditambahkan');
        return redirect('/dashboard/rups')->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(Rups $rups)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $rups = Rups::where('slug', $slug)->firstOrFail();
        return view('dashboard-admin.rups.edit', compact('rups'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRupsRequest $request, $slug)
    {
        $rups = Rups::where('slug', $slug)->firstOrFail();

        try {
            $rules = [
                'title' => 'required|max:255',
                'pdf' => 'file|mimes:pdf' 
            ];

            $validateData = $request->validate($rules);

            $validateData['slug'] = SlugService::createSlug(Rups::class, 'slug', $validateData['title']);

            // Handle pdf update
            if ($request->hasFile('pdf')) {
                if ($rups->pdf) {
                    // Delete old pdf
                    Storage::delete($rups->pdf);
                }
                // Store new pdf in storage
                $validateData['pdf'] = $request->file('pdf')->store('file-rups');
            } else {
                // Keep old pdf if no new pdf is uploaded
                $validateData['pdf'] = $rups->pdf;
            }

            $rups->update($validateData);

            alert()->success('Berhasil', 'File RUPS berhasil diubah');
            return redirect('/dashboard/rups')->withInput();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $rups = Rups::where('slug', $slug)->firstOrFail();

        if ($rups->pdf) {
            Storage::delete($rups->pdf);
        }

        Rups::destroy($rups->id);

        alert()->success('Success', 'File RUPS berhasil dihapus');
        return redirect('/dashboard/rups')->withInput();
    }
}
