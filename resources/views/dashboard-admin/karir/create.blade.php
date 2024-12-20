@extends('dashboard-admin.layouts.main')

@section('container')

   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <div class="card-title">Form Tambah Info karir</div>
               </div>
               <div class="card-body">
                  <form action="{{ route('karir.store') }} " method="POST" enctype="multipart/form-data">
                     @csrf
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                    <label for="title">Nama Karir</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Masukan Nama Karir..." value="{{ old('title') }}" required/>
                                    @error('title')
                                       <div class="invalid-feedback">
                                          {{ $message }}
                                       </div>
                                    @enderror
                              </div>
                           </div>                           
                           <div class="col-md-6">
                              <div class="form-group">
                                    <label for="type">Type Karir</label>
                                    <select class="form-control @error('type') is-invalid @enderror" id="type" name="type" required>
                                        <option value="">Pilih Type Karir</option>
                                        <option value="Fresh Graduate" {{ old('type') == 'Fresh Graduate' ? 'selected' : '' }}>Fresh Graduate</option>
                                        <option value="Berpengalaman" {{ old('type') == 'Berpengalaman' ? 'selected' : '' }}>Berpengalaman</option>
                                    </select>                                    
                                    @error('title')
                                       <div class="invalid-feedback">
                                          {{ $message }}
                                       </div>
                                    @enderror
                              </div>
                           </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal_mulai">Tanggal Mulai</label>
                                    <input type="date" class="form-control @error('tanggal_mulai') is-invalid @enderror" id="tanggal_mulai" name="tanggal_mulai" value="{{ old('tanggal_mulai') }}" required/>
                                    @error('tanggal_mulai')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal_berakhir">Tanggal Berakhir</label>
                                    <input type="date" class="form-control @error('tanggal_berakhir') is-invalid @enderror" id="tanggal_berakhir" name="tanggal_berakhir" value="{{ old('tanggal_berakhir') }}" required/>
                                    @error('tanggal_berakhir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="batas_usia">Batas Usia</label>
                                    <input type="number" class="form-control @error('batas_usia') is-invalid @enderror" id="batas_usia" name="batas_usia" value="{{ old('batas_usia') }}" placeholder="Masukan Batasan Usia..." required/>
                                    @error('batas_usia')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kuota">Kuota</label>
                                    <input type="number" class="form-control @error('kuota') is-invalid @enderror" id="kuota" name="kuota" value="{{ old('kuota') }}"  placeholder="Masukan Jumlah Kuota..." required/>
                                    @error('kuota')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>  
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="lokasi_test">Lokasi Test</label>
                                    <input type="text" class="form-control @error('lokasi_test') is-invalid @enderror" id="lokasi_test" name="lokasi_test" placeholder="Masukan Lokasi Test..." value="{{ old('lokasi_test') }}" required/>
                                    @error('lokasi_test')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                    <label for="tentang_pekerjaan">Tentang Pekerjaan</label>
                                    <input type="hidden" class="form-control @error('tentang_pekerjaan') is-invalid @enderror" id="tentang_pekerjaan" name="tentang_pekerjaan" required value="{{ old('tentang_pekerjaan') }}">
                                    <trix-editor input="tentang_pekerjaan"></trix-editor>
                                    @error('tentang_pekerjaan')
                                       <div class="invalid-feedback">
                                          {{ $message }}
                                       </div>
                                    @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                            <div class="form-group">
                                  <label for="persyaratan">Persyaratan</label>
                                  <input type="hidden" class="form-control @error('persyaratan') is-invalid @enderror" id="persyaratan" name="persyaratan" required value="{{ old('persyaratan') }}">
                                  <trix-editor input="persyaratan"></trix-editor>
                                  @error('persyaratan')
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                  @enderror
                            </div>
                         </div>
                         <div class="col-md-12">
                            <div class="form-group">
                                  <label for="informasi_tambahan">Informasi Tambahan</label>
                                  <input type="hidden" class="form-control @error('informasi_tambahan') is-invalid @enderror" id="informasi_tambahan" name="informasi_tambahan" value="{{ old('informasi_tambahan') }}">
                                  <trix-editor input="informasi_tambahan"></trix-editor>
                                  @error('informasi_tambahan')
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                  @enderror
                                  <span class="text-danger">Tidak Wajib Diisi</span>
                            </div>
                         </div>
                        </div>
                        <div class="card-action">
                           <button type="submit" class="btn btn-success">Simpan</button>
                           <a href="{{ route('karir') }}" class="btn btn-danger">Kembali</a>
                        </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>

@endsection
