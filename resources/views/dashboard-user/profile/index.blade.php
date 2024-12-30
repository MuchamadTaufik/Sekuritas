@extends('dashboard-user.layouts.main')

@section('container')
    
    <div class="bg-route">
        <img src="/img/dashboard-user/bg-route.jpg" alt="Image">
    </div>

    <div class="profile">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center">
                                <img id="foto-preview" src="{{ $user->biodata && $user->biodata->foto ? asset('storage/foto/' . $user->biodata->foto) : asset('assets/img/profile.jpg') }}" alt="{{ $user->name }}" class="img-fluid rounded-circle mb-3" style="object-fit: cover; width: 150px; height: 150px"/>
                                <h5 class="card-title text-center">{{ $user->name}}</h5>
                            </div>
                            <hr>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2 d-flex align-items-center">
                                    <i class="fas fa-home me-3"></i> {{ $user->biodata->alamat ?? '-' }}
                                </li>
                                <li class="mb-2 d-flex align-items-center">
                                    <i class="fas fa-phone me-3"></i> {{ $user->biodata->no_telp ?? '-' }}
                                </li>
                                <li class="mb-2 d-flex align-items-center">
                                    <i class="fas fa-user me-3"></i> {{ $user->biodata->gender ?? '-' }}
                                </li>
                                <li class="mb-2 d-flex align-items-center">
                                    <i class="fas fa-calendar me-3"></i> {{ $user->biodata->tanggal_lahir ?? '-' }}
                                </li>
                            </ul>
                            <hr>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2">
                                    <a href="#" class="btn btn-primary w-100 d-flex align-items-center justify-content-center">
                                        Informasi Karir
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="btn btn-primary w-100 d-flex align-items-center justify-content-center">
                                        Riwayat Karir
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                

                <div class="col-md-8">
                    <div class="card">
                        <h3 class="mb-0">Ubah Biodata</h3>
                        <div class="card-body">
                            <form class="row g-3" action="{{ route('profile.update', $user->name) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-6 mb-2">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ $user->name }}">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ $user->email }}">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                @if (!empty(auth()->user()->password))
                                    <div class="col-md-6 mb-2">
                                        <label for="old_password" class="form-label">Password Lama</label>
                                        <input type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" id="old_password">
                                        @error('old_password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                @endif
                                <div class="col-md-6 mb-2">
                                    <label for="new_password" class="form-label">Password Baru</label>
                                    <input type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" id="new_password">
                                    @error('new_password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="gender" class="form-label">Jenis Kelamin</label>
                                    <select class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender">
                                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                        <option value="Laki-Laki" {{ ($user->biodata->gender ?? '') == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                                        <option value="Perempuan" {{ ($user->biodata->gender ?? '') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                    @error('gender')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="no_telp" class="form-label">Nomor Telepon</label>
                                    <input type="number" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" id="no_telp" value="{{ $user->biodata->no_telp ?? '62' }}">
                                    @error('no_telp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" id="tanggal_lahir" value="{{ $user->biodata->tanggal_lahir ?? '-' }}">
                                    @error('tanggal_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="foto" class="form-label">Foto Profil</label>
                                    <input type="file" class="form-control @error('foto') is-invalid @enderror" value="" id="foto" name="foto" onchange="previewImage()">
                                    @error('foto')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <div class="invalid-feedback" id="fileSizeError" style="display: none;">
                                        Ukuran file tidak boleh lebih dari 2MB.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" aria-label="With textarea">{{ $user->biodata->alamat ?? '-' }}</textarea>
                                    @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-12 text-end mt-3">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>

    <script>
        function previewImage() {
            const input = document.getElementById('foto');
            const fileSizeError = document.getElementById('fileSizeError');
            if (input.files && input.files[0]) {
                if (input.files[0].size > 2 * 1024 * 1024) {
                    fileSizeError.style.display = 'block';
                    input.value = '';
                } else {
                    fileSizeError.style.display = 'none';
                }
            }
        }
    </script>
@endsection