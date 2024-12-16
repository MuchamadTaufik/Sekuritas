@extends('dashboard-admin.layouts.main')

@section('container')

   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <div class="card-title">Form Tambah Kegiatan</div>
               </div>
               <div class="card-body">
                  <form action="{{ route('kegiatan.store') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                    <label for="images">Gambar</label>
                                    <input type="file" class="form-control @error('images') is-invalid @enderror" id="images" name="images" onchange="previewImage()" required aria-describedby="imagesHelp"/>
                                    <small id="imagesHelp" class="form-text text-red">Maksimal ukuran gambar (4MB)</small>
                                    @error('images')
                                       <div class="invalid-feedback">
                                          {{ $message }}
                                       </div>
                                    @enderror
                                    <div class="mt-2">
                                       <img id="image-preview" src="#" alt="Image preview" style="display: none; max-width: 100%; height: auto;">
                                    </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" placeholder="Masukan tanggal..." value="{{ old('tanggal') }}" required/>
                                    @error('tanggal')
                                       <div class="invalid-feedback">
                                          {{ $message }}
                                       </div>
                                    @enderror
                              </div>
                           </div>                           
                           <div class="col-md-12">
                              <div class="form-group">
                                    <label for="title">Judul</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Masukan Judul..." value="{{ old('title') }}" required/>
                                    @error('title')
                                       <div class="invalid-feedback">
                                          {{ $message }}
                                       </div>
                                    @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <input type="hidden" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" required value="{{ old('deskripsi') }}">
                                    <trix-editor input="deskripsi"></trix-editor>
                                    @error('deskripsi')
                                       <div class="invalid-feedback">
                                          {{ $message }}
                                       </div>
                                    @enderror
                              </div>
                           </div>
                        </div>
                        <div class="card-action">
                           <button type="submit" class="btn btn-success">Simpan</button>
                           <a href="{{ route('kegiatan') }}" class="btn btn-danger">Kembali</a>
                        </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>

@endsection
