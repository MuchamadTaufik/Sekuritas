<?php

namespace App\Http\Controllers\DashboardUser;

use App\Models\User;
use App\Models\Biodata;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreBiodataRequest;
use App\Http\Requests\UpdateBiodataRequest;
use App\Models\Lamaran;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($name)
    {
        $user = User::where('name', $name)->firstOrFail();
        $lamaran = Lamaran::all();
        return view('dashboard-user.profile.index', compact('user','lamaran'));
    }

    public function lamaran($name)
    {
        $user = User::where('name', $name)->firstOrFail();
        $lamaran = Lamaran::where('user_id', $user->id)->get();
        return view('dashboard-user.profile.lamaran', compact('user','lamaran'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(UpdateBiodataRequest $request, Biodata $biodata)
    {
        {
            try {
                $user = Auth::user();
    
                $validatedUserData = $request->validate([
                    'name' => 'required|max:255',
                    'email' => 'required|email|max:255|unique:users,email,' . $user->id,
                ]);
    
                $validatedBiodata = $request->validate([
                    'gender' => 'nullable|in:Laki-Laki,Perempuan',
                    'no_telp' => 'nullable|max:15',
                    'alamat' => 'nullable|max:255',
                    'tanggal_lahir' => 'nullable|date',
                    'foto' => 'nullable|image|file|max:2048',
                ]);
    
                // Jika password baru diisi tetapi password lama kosong, update password baru saja
                if ($request->filled('new_password') && !$request->filled('old_password')) {
                    $validatedUserData['password'] = Hash::make($request->new_password);
                } elseif ($request->filled('old_password') && $request->filled('new_password')) {
                    // Verifikasi apakah password lama sesuai dengan password saat ini
                    if (!Hash::check($request->old_password, $user->password)) {
                        toast()->error('Gagal', 'Password lama tidak sesuai');
                        return redirect()->back()->withInput();
                    }
    
                    // Update password baru
                    $validatedUserData['password'] = Hash::make($request->new_password);
                }
    
                // Update data di tabel users
                User::where('id', $user->id)->update($validatedUserData);
    
                // Cek apakah ada file foto baru yang diupload
                if ($request->hasFile('foto')) {
                    // Ambil biodata pengguna untuk menghapus foto lama
                    $biodata = Biodata::where('user_id', $user->id)->first();
    
                    if ($biodata && $biodata->foto) {
                        // Hapus foto lama dari storage
                        $oldPhotoPath = 'foto/' . $biodata->foto;
                        if (Storage::exists($oldPhotoPath)) {
                            Storage::delete($oldPhotoPath);
                        }
                    }
    
                    // Simpan foto baru ke dalam storage
                    $fileName = time() . '.' . $request->foto->extension();
                    $request->file('foto')->storeAs('foto', $fileName);
    
                    // Simpan path foto ke database
                    $validatedBiodata['foto'] = $fileName;
                }
                // Update atau buat entri biodata
                Biodata::updateOrCreate(
                    ['user_id' => $user->id],
                    $validatedBiodata
                );
    
                // Tampilkan pesan sukses
                toast()->success('Berhasil', 'Profile berhasil diperbarui');
                return redirect()->back()->withInput();
            } catch (\Throwable $th) {
                // Tampilkan pesan error jika terjadi kesalahan
                toast()->error('Gagal', 'Terjadi kesalahan saat memperbarui profil');
                return redirect()->back()->withInput();
            }
        }
    }
}
