<?php

namespace App\Http\Controllers\DashboardAdmin;

use App\Models\Kegiatan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreKegiatanRequest;
use App\Http\Requests\UpdateKegiatanRequest;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kegiatan = Kegiatan::latest()->get();
        return view('dashboard-admin.kegiatan.index', compact('kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('dashboard-admin.kegiatan.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKegiatanRequest $request)
    {
        $validateData = $request->validate([
            'category_id' => 'required',
            'images' => 'required|image|file|max:4096',
            'title' => 'required|max:255',
            'tanggal' => 'required|date_format:Y-m-d',
            'deskripsi' => 'required',
            'views' => 'integer|min:0',
        ]);

        $validateData['slug'] = SlugService::createSlug(Kegiatan::class, 'slug', $validateData['title']);

        $validateData['views'] = 0;

        if ($request->file('images')) {
            $validateData['images'] = $request->file('images')->store('images-kegiatan');
        }

        Kegiatan::create($validateData);

        toast()->success('Berhasil', 'Kegiatan Berhasil ditambahkan');
        return redirect('/dashboard/kegiatan')->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $kegiatan = Kegiatan::where('slug', $slug)->firstOrFail();
        $category = Category::all();
        return view('dashboard-admin.kegiatan.edit', compact('kegiatan','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKegiatanRequest $request, $slug)
    {
        $kegiatan = Kegiatan::where('slug', $slug)->firstOrFail();

        try {
            $rules = [
                'category_id' => 'required',
                'images' => 'image|file|max:4096',
                'title' => 'required|max:255',
                'tanggal' => 'required|date_format:Y-m-d',
                'deskripsi' => 'required',
            ];

            $validateData = $request->validate($rules);

            $validateData['slug'] = SlugService::createSlug(Kegiatan::class, 'slug', $validateData['title']);

            if ($request->hasFile('images')) {
                if ($kegiatan->images) {
                    // Delete old image
                    Storage::delete($kegiatan->images);
                }
                // Store new image in storage
                $validateData['images'] = $request->file('images')->store('images-kegiatan');
            } else {
                // Keep old image if no new image is uploaded
                $validateData['images'] = $kegiatan->images;
            }

            $kegiatan->update($validateData);

            alert()->success('Berhasil', 'Kegiatan berhasil diubah');
            return redirect('/dashboard/kegiatan')->withInput();
            } catch (\Exception $e) {
                dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $kegiatan = Kegiatan::where('slug', $slug)->firstOrFail();

        if ($kegiatan->images) {
            Storage::delete($kegiatan->images);
        }

        Kegiatan::destroy($kegiatan->id);

        alert()->success('Success', 'Kegiatan berhasil dihapus');
        return redirect('/dashboard/kegiatan')->withInput();
    }
}
