@extends('dashboard-admin.layouts.main')

@section('container')

   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <div class="card-title">Form Edit Akun</div>
               </div>
               <div class="card-body">
                  <form action="{{ route('akun.update', $akun->id) }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                    <label for="name">Username</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukan Username..." value="{{ old('name', $akun->name) }}" required/>
                                    @error('name')
                                       <div class="invalid-feedback">
                                          {{ $message }}
                                       </div>
                                    @enderror
                              </div>
                           </div>
                            <div class="col-md-6">
                               <div class="form-group">
                                     <label for="email">Email</label>
                                     <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukan Email..." value="{{ old('email', $akun->email) }}" required/>
                                     @error('email')
                                        <div class="invalid-feedback">
                                           {{ $message }}
                                        </div>
                                     @enderror
                               </div>
                            </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                  <label for="role">Role</label>
                                  <select class="form-control @error('role') is-invalid @enderror" id="role" name="role" required>
                                      <option value="">Pilih Role</option>
                                      <option value="admin" {{ old('role', $akun->role) == 'admin' ? 'selected' : '' }}>admin</option>
                                      <option value="hrd" {{ old('role', $akun->role) == 'hrd' ? 'selected' : '' }}>hrd</option>
                                      <option value="pelamar" {{ old('role', $akun->role) == 'pelamar' ? 'selected' : '' }}>pelamar</option>
                                      <option value="superadmin" {{ old('role', $akun->role) == 'superadmin' ? 'selected' : '' }}>superadmin</option>
                                      <option value="audit" {{ old('role', $akun->role) == 'audit' ? 'selected' : '' }}>audit</option>
                                  </select>
                                  @error('role')
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                  @enderror
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                  <label for="password">Password</label>
                                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukan Password..." value="{{ old('password') }}"/>
                                  @error('password')
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                  @enderror
                            </div>
                         </div>
                        <div class="card-action">
                           <button type="submit" class="btn btn-success">Simpan</button>
                           <a href="{{ route('akun') }}" class="btn btn-danger">Kembali</a>
                        </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>

@endsection
