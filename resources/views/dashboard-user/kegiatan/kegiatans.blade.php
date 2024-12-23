@extends('dashboard-user.layouts.main')

@section('container')
   <div class="route">
      <div class="container-fluid">
         {{-- bg-route start --}}
         <div class="bg-route">
            <img src="/img/dashboard-user/hubungan.jpg" alt="Image">
         </div>
         {{-- bg-route-end --}}
         <div class="title-route">
            <p class="non-active"><a href="{{ route('/') }}"><i class="fas fa-arrow-left"></i> Kembali</a></p>
            <p>|</p>
            <p>Kegiatan</p>
         </div>
      </div>
   </div>

   <div class="single">
      <div class="container">
          <div class="section-header">
              <h2>Kegiatan Kami</p>
          </div>
          <div class="row">
            <div class="col-lg-8">
                @if ($kegiatans->isEmpty())
                    <div class="text-center py-8 text-gray-500">
                        <i class="fas fa-calendar-times fa-3x mb-3"></i>
                        <p class="text-lg">Kegiatan Belum Tersedia</p>
                    </div>
                @else
                    @foreach ($kegiatans as $data)
                    <div class="kegiatan-card">
                        <div class="kegiatan-image">
                            <img src="{{ asset('storage/' . $data->images) }}" alt="{{ $data->title }}">
                        </div>
                        <div class="kegiatan-header">
                            <h3 class="kegiatan-title">{{ $data->title }}</h3>
                            <div class="kegiatan-meta">
                                <div class="meta-item">
                                    <i class="fa fa-calendar-alt"></i>
                                    <span>{{ \Carbon\Carbon::parse($data->tanggal)->format('M d, Y') }}</span>
                                </div>
                                <div class="meta-item">
                                    <i class="fa fa-eye"></i>
                                    <span>{{ $data->views }} view(s)</span>
                                </div>
                                <div class="meta-item">
                                    <i class="fa fa-list"></i>
                                    <a href="#" class="category-link">{{ $data->category->name }}</a>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <div class="kegiatan-content">
                            <article>
                                {!! $data->deskripsi !!}
                            </article>
                        </div>
                        
                        <div class="kegiatan-footer">
                            <hr>
                            <div class="footer-actions">
                                <a href="{{ route('kegiatan.dashuser.show', $data->slug) }}" class="read-more">Baca selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>

              <div class="col-lg-4">
                <div class="categories mb-5">
                    <h3>Kategori</h3>
                    <hr>
                    <div class="categories-list">
                        @if ($category->isEmpty())
                            <p class="text-center">Kegiatan Belum Tersedia</p>
                        @else
                            @foreach ($category as $data)
                                <div class="categories-item d-flex justify-content-between align-items-center">
                                    <div class="category-name">
                                        <p>{{ $data->name }}</p>
                                    </div>
                                    <div class="category-total">
                                        <h4 class="post-title">({{ $data->kegiatan->count() }})</h4>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>                

               <div class="recent-posts">
                   <h3>Kegiatan Lainnya</h2>
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
                                           <span><i class="fa fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($data->tanggal)->format('M d, Y') }}</span>
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