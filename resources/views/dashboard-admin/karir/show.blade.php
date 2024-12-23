@extends('dashboard-admin.layouts.main')

@section('container')

   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <div class="card-title">Form Karir {{ $karir->title }} </div>
               </div>
               <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                       <div class="form-group">
                             <label for="title">Nama Karir</label>
                             <input class="form-control" value="{{ $karir->title }}" readonly/>
                       </div>
                    </div>                           
                    <div class="col-md-6">
                       <div class="form-group">
                             <label for="type">Type Karir</label>
                             <input class="form-control" value="{{ $karir->type }}" readonly/>

                       </div>
                    </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="tanggal_mulai">Tanggal Mulai</label>
                             <input class="form-control" value="{{ $karir->tanggal_mulai }}" readonly/>
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="tanggal_berakhir">Tanggal Berakhir</label>
                             <input class="form-control" value="{{ $karir->tanggal_berakhir}}" readonly/>
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="batas_usia">Batas Usia</label>
                             <input class="form-control" value="{{ $karir->batas_usia }}" readonly/>
                         </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                            <label for="batas_usia">Batas IPK</label>
                            <input class="form-control" value="{{ $karir->ipk }}" readonly/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jurusan">Syarat Jurusan</label>
                            <input class="form-control" value="{{ $karir->jurusan->name }}" readonly/>
                        </div>
                    </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="kuota">Kuota</label>
                             <input class="form-control" value="{{ $karir->kuota }}" readonly/>
                         </div>
                     </div>  
                     <div class="col-md-12">
                         <div class="form-group">
                             <label for="lokasi_test">Lokasi Test</label>
                             <input class="form-control" value="{{ $karir->lokasi_test }}" readonly/>
                         </div>
                     </div> 
                     <div class="col-md-12">
                        <div class="form-group">
                            <label for="tentang_pekerjaan">Tentang Pekerjaan</label>
                            <input type="hidden" class="form-control" id="tentang_pekerjaan" name="tentang_pekerjaan" value="{{ $karir->tentang_pekerjaan }}">
                            <trix-editor input="tentang_pekerjaan" class="trix-editor--readonly" readonly></trix-editor>
                        </div>
                     </div>                     
                    <div class="col-md-12">
                     <div class="form-group">
                           <label for="persyaratan">Persyaratan</label>
                           <input type="hidden" class="form-control" id="persyaratan" name="persyaratan" value="{{ $karir->persyaratan }}">
                           <trix-editor input="persyaratan" class="trix-editor--readonly" readonly></trix-editor>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                           <label for="informasi_tambahan">Informasi Tambahan</label>
                           <input type="hidden" class="form-control" id="informasi_tambahan" name="informasi_tambahan" value="{{ $karir->informasi_tambahan }}">
                           <trix-editor input="informasi_tambahan" class="trix-editor--readonly" readonly></trix-editor>
                     </div>
                  </div>
                 </div>
                 <div class="card-action">
                    <a href="{{ route('karir') }}" class="btn btn-danger">Kembali</a>
                 </div>
               </div>
            </div>
         </div>
      </div>
   </div>

@endsection
