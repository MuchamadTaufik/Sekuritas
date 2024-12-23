@extends('dashboard-user.layouts.main')

@section('container')
   <div class="route">
      <div class="container-fluid">
         {{-- bg-route start --}}
         <div class="bg-route">
            <img src="/img/dashboard-user/bg-route.jpg" alt="Image">
         </div>
         {{-- bg-route-end --}}
         <div class="title-route">
            <p class="non-active"><a href="{{ route('/') }}"><i class="fas fa-arrow-left"></i> Kembali</a></p>
            <p>|</p>
            <p>Kegiatan</p>
            <p>|</p>
            <p class="active">{{ $kegiatan->title }} </p>
         </div>
      </div>
   </div>

   <div class="single">
      <div class="container">
          <div class="section-header">
              <p>Detail Kegiatan</p>
              <h2>{{ $kegiatan->title }} </h2>
          </div>
          <div class="row">
              <div class="col-md-8">
                  <img src="{{ asset('storage/' . $kegiatan->images) }}" alt="Image">
                  <div class="detail-meta">
                     <i class="fa fa-calendar-alt"></i>
                     <p>{{ $kegiatan->tanggal }} </p>
                     <i class="fa fa-eye"></i>
                     <a href="">{{ $kegiatan->views }} view(s) </a>
                     
                  </div>
                  <article class="my-3 fs-6">
                     {!! $kegiatan->deskripsi !!}
                  </article>
              </div>
              <div class="col-md-4">
               <div class="recent-posts">
                   <h2>Kegiatan Lainnya</h2>
                   <hr>
                   <div class="recent-post-list">
                       @if ($kegiatanData->isEmpty())
                           <p class="text-center">Kegiatan Belum Tersedia</p>
                       @else
                           @foreach ($kegiatanData as $data)
                               <div class="recent-post-item">
                                   <div class="post-img">
                                       <img src="{{ asset('storage/' . $data->images) }}" alt="{{ $data->title }}" class="img-fluid">
                                   </div>
                                   <div class="post-info">
                                       <h4 class="post-title">{{ $data->title }}</h4>
                                       <div class="post-meta">
                                           <span><i class="fa fa-calendar-alt"></i> {{ $data->tanggal }}</span>
                                           <span><i class="fa fa-eye"></i> {{ $data->views }} view(s)</span>
                                       </div>
                                       <a href="{{ route('kegiatan.dashuser.show', $data->slug) }}" class="read-more-btn">Read More</a>
                                   </div>
                               </div>
                           @endforeach
                       @endif
                   </div>
               </div>
           </div>           
          </div>
      </div>
  </div>

   {{-- partner start --}}
   @include('dashboard-user.layouts.partials.partner')
   {{-- partner end --}}
@endsection