@extends('dashboard-admin.layouts.main')

@section('container')

   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <div class="card-title">Form Tambah Jurusan</div>
               </div>
               <div class="card-body">
                  <form action="{{ route('jurusan.store') }}" method="POST">
                     @csrf
                        <div class="row">                          
                           <div class="col-md-12">
                              <div class="form-group">
                                    <label for="name">Nama Jurusan</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukan Nama Jurusan..." value="{{ old('name') }}" required/>
                                    @error('name')
                                       <div class="invalid-feedback">
                                          {{ $message }}
                                       </div>
                                    @enderror
                              </div>
                           </div>
                        </div>
                        <div class="card-action">
                           <button type="submit" class="btn btn-success">Simpan</button>
                           <a href="{{ route('jurusan') }}" class="btn btn-danger">Kembali</a>
                        </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>

@endsection