<?php

namespace App\Http\Controllers\DashboardAdmin;

use App\Models\Kegiatan;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKegiatanRequest;
use App\Http\Requests\UpdateKegiatanRequest;
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
        return view('dashboard-admin.kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKegiatanRequest $request)
    {
        $validateData = $request->validate([
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
    public function edit(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKegiatanRequest $request, Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kegiatan $kegiatan)
    {
        //
    }
}
