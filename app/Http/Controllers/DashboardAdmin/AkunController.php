<?php

namespace App\Http\Controllers\DashboardAdmin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    public function index()
    {
        $akun = User::latest()->get();

        return view('dashboard-admin.akun.index', compact('akun'));
    }

    public function create()
    {
        return view('dashboard-admin.akun.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'role' => 'required|in:admin,hrd,pelamar,superadmin,audit',
            'password' => 'required|min:6'
        ]);

        $validate['password'] = Hash::make($validate['password']);

        User::create($validate);

        toast()->success('Berhasil', 'Akun Berhasil ditambahkan');
        return redirect('/dashboard/kontrol-akun')->withInput();
    }

    public function edit($id)
    {
        $akun = User::where('id', $id)->firstOrFail();
        return view('dashboard-admin.akun.edit', compact('akun'));
    }

    public function update(Request $request, $id)
    {
        $akun = User::where('id', $id)->firstOrFail();

        try{
            $rules = [
                'name' => 'required|max:255',
                'email' => 'required|email|unique:users',
                'email' => 'required|email|unique:users,email,' . $akun->id,
                'password' => 'min:6'
            ];

            $validateData = $request->validate($rules);

            if ($request->filled('password')) {
                $validateData['password'] = bcrypt($request->password);
            } else {
                // Remove password from validated data if it wasn't provided
                unset($validateData['password']);
            }

            $akun->update($validateData);

            alert()->success('Berhasil', 'Akun berhasil diubah');
            return redirect('/dashboard/kontrol-akun')->withInput();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function destroy($id)
    {
        $akun = User::where('id', $id)->firstOrFail();

        User::destroy($akun->id);

        toast()->success('Berhasil', 'Akun Berhasil dihapus');
        return redirect('/dashboard/kontrol-akun')->withInput();
    }
}
