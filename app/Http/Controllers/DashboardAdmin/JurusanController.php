<?php

namespace App\Http\Controllers\DashboardAdmin;

use App\Models\Jurusan;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreJurusanRequest;
use App\Http\Requests\UpdateJurusanRequest;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan = Jurusan::latest()->get();

        return view('dashboard-admin.jurusan.index',compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard-admin.jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJurusanRequest $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255|unique:jurusans,name',
        ]);

        Jurusan::create($validateData);

        // Menampilkan notifikasi sukses dan redirect
        toast()->success('Berhasil', 'Jurusan Berhasil ditambahkan');
        return redirect('/dashboard/jurusan')->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(Jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jurusan $jurusan)
    {
        return view('dashboard-admin.jurusan.edit', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJurusanRequest $request, Jurusan $jurusan)
    {
        try {
            $rules = [
                'name' => 'required|max:255'
            ];

            $validateData = $request->validate($rules);

            $jurusan->update($validateData);

            alert()->success('Berhasil', 'Jurusan berhasil diubah');
            return redirect('/dashboard/jurusan')->withInput();

            } catch (\Exception $e) {
                dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurusan $jurusan)
    {
        Jurusan::destroy($jurusan->id);

        alert()->success('Success', 'Jurusan berhasil dihapus');
        return redirect('/dashboard/jurusan')->withInput();
    }
}
