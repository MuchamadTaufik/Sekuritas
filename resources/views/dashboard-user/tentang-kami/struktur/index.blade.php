@extends('dashboard-user.layouts.main')

@section('container')
   <div class="route">
      <div class="container-fluid">
         {{-- bg-route start --}}
         @include('dashboard-user.layouts.partials.bg-route-organisasi')
         {{-- bg-route-end --}}
         <div class="title-route">
            <p class="non-active"><a href="{{ route('/') }}"><i class="fas fa-arrow-left"></i> Kembali</a></p>
            <p>|</p>
            <p class="active">Struktur Organisasi</p>
         </div>
      </div>
   </div>
   <div class="organisasi">
      <div class="container">
         <img src="img/dashboard-user/organisasi.png" alt="">
      </div>
   </div>

   <!-- Team Start -->
   @include('dashboard-user.layouts.partials.team')
   <!-- Team End -->
@endsection
