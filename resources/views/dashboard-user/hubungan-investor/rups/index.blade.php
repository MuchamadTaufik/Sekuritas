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
         @if ($rups->isEmpty())
            <p class="text-center">RUPS Belum Tersedia</p>
         @else
            @foreach ($rups as $data )
               <div class="card card-pedoman-pdf">
                  <p>{{ $data->title }} 
                     <a href="{{ asset('storage/' . $data->pdf) }}" target="_blank">
                        <i class="fas fa-file-pdf"></i>
                     </a>
                  </p>
               </div>
            @endforeach
         @endif
      </div>
   </div>

   {{-- partner start --}}
   @include('dashboard-user.layouts.partials.partner')
   {{-- partner end --}}
@endsection