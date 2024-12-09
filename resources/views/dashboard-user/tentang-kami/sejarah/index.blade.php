@extends('dashboard-user.layouts.main')

@section('container')
   <div class="route mb-5">
      <div class="container-fluid">
         {{-- bg-route start --}}
         @include('dashboard-user.layouts.partials.bg-route')
         {{-- bg-route-end --}}
         <div class="title-route">
            <p class="non-active"><a href=""><i class="fas fa-arrow-left"></i> Kembali</a></p>
            <p>|</p>
            <p class="active">Sejarah Kami</p>
         </div>
      </div>
   </div>
@endsection