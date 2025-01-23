@extends('dashboard-user.layouts.main')

@section('container')
<div class="route">
    <div class="container-fluid">
       {{-- bg-route start --}}
       <div class="bg-route">
          <img src="/img/dashboard-user/galeri/11.jpg" alt="Image">
       </div>
       {{-- bg-route-end --}}
       <div class="title-route">
          <p class="non-active"><a href="{{ route('/') }}"><i class="fas fa-arrow-left"></i> Kembali</a></p>
          <p>|</p>
          <p class="text-danger active">Error</p>
       </div>
    </div>
 </div>
@endsection
