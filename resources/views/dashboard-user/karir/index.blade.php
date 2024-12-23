@extends('dashboard-user.layouts.main')

@section('container')
   <div class="route">
      <div class="container-fluid">
         {{-- bg-route start --}}
         @include('dashboard-user.layouts.partials.bg-route-karir')
         {{-- bg-route-end --}}
         <div class="title-route">
            <p class="non-active"><a href="{{ route('/') }}"><i class="fas fa-arrow-left"></i> Kembali</a></p>
            <p>|</p>
            <p class="active">bjb Sekuritas Karir</p>
         </div>
      </div>
   </div>

   <div class="karir">
      <div class="container">
         <h2>Mulai perjalanan Anda ke jenjang karier berikutnya.</h2>
         <hr>
         <div class="row gy-5">
            <div class="col-12 col-md-12 mb-3 mb-md-0">
               @if ($karir->isEmpty())
                  <p class="text-center">Info Karir Belum Tersedia</p>
               @else

                  @foreach ($karir as $data)
                     <div class="card-karir p-3 mb-3 shadow-sm">
                        <div class="row align-items-center">
                           <div class="col-3 d-none d-md-block">
                              <h6 class="mb-0">{{ $data->title }}</h6>
                           </div>
                           <div class="col-3 d-none d-md-block">
                              <h6 class="mb-0"><i class="bi bi-person-circle"></i> {{ $data->type }}</h6>
                           </div>
                           <div class="col-3 d-none d-md-block">
                              <h6 class="mb-0"><i class="bi bi-bag-fill"></i> {{ \Carbon\Carbon::parse($data->tanggal_mulai)->format('d M Y') }} - {{ \Carbon\Carbon::parse($data->tanggal_berakhir)->format('d M Y') }}</h6>
                           </div>
                           <div class="col-3 text-end d-none d-md-block">
                              <a href="{{ route('karir.dashuser.detail', $data->slug) }}" class="btn btn-karir">READ MORE</a>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12 d-none d-md-block">
                              <p class="text-primary">{{ $data->lokasi_test }}</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-6 d-md-none">
                              <h6>{{ $data->title }}</h6>
                           </div>

                           <div class="col-6 d-md-none text-end">
                              <a href="{{ route('karir.dashuser.detail', $data->slug) }}" class="btn btn-karir">READ MORE</a>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12  d-md-none mb-3">
                              <p class="text-primary text-center">{{ $data->lokasi_test }}</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-6 d-md-none"> <!-- Tampilkan hanya pada mobile -->
                              <h6><i class="bi bi-person-circle"></i> {{ $data->type }}</h6>
                           </div>
                           <div class="col-6 d-md-none"> <!-- Tampilkan hanya pada mobile -->
                              <h6><i class="bi bi-bag-fill"></i> {{ \Carbon\Carbon::parse($data->tanggal_mulai)->format('d M Y') }} - {{ \Carbon\Carbon::parse($data->tanggal_berakhir)->format('d M Y') }}</h6>
                           </div>
                        </div>
                     </div>
                  @endforeach
               @endif
            </div>
         </div>
      </div>
   </div>

   {{-- partner start --}}
   @include('dashboard-user.layouts.partials.partner')
   {{-- partner end --}}
@endsection