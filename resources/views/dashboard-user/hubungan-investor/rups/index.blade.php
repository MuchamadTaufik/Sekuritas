@extends('dashboard-user.layouts.main')

@section('container')
   <div class="route">
      <div class="container-fluid">
         {{-- bg-route start --}}
         @include('dashboard-user.layouts.partials.bg-route-hubungan')
         {{-- bg-route-end --}}
         <div class="title-route">
            <p class="non-active"><a href="{{ route('/') }}"><i class="fas fa-arrow-left"></i> Kembali</a></p>
            <p>|</p>
            <p class="active">RUPS</p>
         </div>
      </div>
   </div>

   <div class="rups">
      <div class="container">
         <h3>Rapat Umum Pemegang Saham (RUPS)</h2>
         <hr>
         <div class="card card-pedoman-pdf">
            <p>Ringkasan Risalah RUPS Tahunan 2024 
               <a href="/pdf/ringkasan-risalah-rups-tahunan-2024.pdf" target="_blank">
                  <i class="fas fa-file-pdf"></i>
               </a>
            </p>
         </div>
         <div class="card card-pedoman-pdf">
            <p>Pengumuman RUPS Tahunan 27 Juli 2023 
               <a href="/pdf/ringkasan-risalah-rups-tahunan-2023.pdf" target="_blank">
                  <i class="fas fa-file-pdf"></i>
               </a>
            </p>
         </div>
         <div class="card card-pedoman-pdf">
            <p>Ringkasan Risalah RUPS Luar Biasa 2023 
               <a href="/pdf/ringkasan-risalah-rups-luar-biasa-2023.pdf" target="_blank">
                  <i class="fas fa-file-pdf"></i>
               </a>
            </p>
         </div>
      </div>
   </div>

   {{-- partner start --}}
   @include('dashboard-user.layouts.partials.partner')
   {{-- partner end --}}
@endsection