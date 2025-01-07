@extends('dashboard-user.layouts.main')

@section('container')
   <div class="route mb-5">
      <div class="container-fluid">
         {{-- bg-route start --}}
         @include('dashboard-user.layouts.partials.bg-route-karir')
         {{-- bg-route-end --}}
         <div class="title-route">
            <p class="non-active"><a href="{{ route('/') }}"><i class="fas fa-arrow-left"></i> Kembali</a></p>
            <p>|</p>
            <p class="non-active"><a href="{{ route('karir.dashuser') }}">Karir</a></p>
            <p>|</p>
            <p class="active">{{ $karir->title }}</p>
         </div>
      </div>
   </div>

   <div class="detail-karir">
      <div class="container">
         <div class="section-header">
            <p>Detail Karir</p>
            <h2>{{ $karir->title }}</h2>
         </div>
         <div class="row">
            <div class="col-lg-8">
                  <div class="karir-detail-card">
                     <div class="karir-header mb-4">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                           <span class="badge bg-primary text-white mb-2">{{ $karir->type }}</span>
                           <div class="status-badges">
                              <span class="badge text-white {{ ($karir->available > 0 && now()->lt(Carbon\Carbon::parse($karir->tanggal_berakhir))) ? 'bg-success' : 'bg-danger' }}">
                                 {{ ($karir->available > 0 && now()->lt(Carbon\Carbon::parse($karir->tanggal_berakhir))) ? 'Open' : 'Closed' }}
                             </span>
                           </div>
                        </div>
                     </div>
               
                     <div class="karir-meta mb-4">
                        <div class="row g-3">
                           <div class="col-md-6">
                                 <div class="meta-item">
                                    <i class="fas fa-calendar-alt text-primary"></i>
                                    <div>
                                       <small class="text-muted">Periode Karir</small>
                                       <p class="mb-0">{{ \Carbon\Carbon::parse($karir->tanggal_mulai)->format('d M Y') }} - {{ \Carbon\Carbon::parse($karir->tanggal_berakhir)->format('d M Y') }}</p>
                                    </div>
                                 </div>
                           </div>
                           <div class="col-md-6">
                                 <div class="meta-item">
                                    <i class="fas fa-graduation-cap text-primary"></i>
                                    <div>
                                       <small class="text-muted">Kebutuhan Jurusan</small>
                                       <p class="mb-0">{{ $karir->jurusan->name }}</p>
                                    </div>
                                 </div>
                           </div>
                           <div class="col-md-6">
                                 <div class="meta-item">
                                    <i class="fas fa-user text-primary"></i>
                                    <div>
                                       <small class="text-muted">Maksimal Umur</small>
                                       <p class="mb-0">{{ $karir->batas_usia }} Tahun</p>
                                    </div>
                                 </div>
                           </div>
                           <div class="col-md-6">
                                 <div class="meta-item">
                                    <i class="fas fa-award text-primary"></i>
                                    <div>
                                       <small class="text-muted">Minimal IPK</small>
                                       <p class="mb-0">{{ number_format($karir->ipk, 2) }}</p>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
               
                     <div class="karir-sections">
                        <div class="section mb-4">
                           <h4 class="section-title">
                                 <i class="fas fa-briefcase me-2"></i> Deskripsi Pekerjaan
                           </h4>
                           <div class="section-content">
                                 {!! $karir->tentang_pekerjaan !!}
                           </div>
                        </div>
               
                        <div class="section mb-4">
                           <h4 class="section-title">
                                 <i class="fas fa-list-ul me-2"></i> Kebutuhan
                           </h4>
                           <div class="section-content">
                                 {!! $karir->persyaratan !!}
                           </div>
                        </div>
               
                        <div class="section mb-4">
                           <h4 class="section-title">
                                 <i class="fas fa-map-marker-alt me-2"></i> Lokasi Test
                           </h4>
                           <div class="section-content">
                                 <p>{{ $karir->lokasi_test }}</p>
                           </div>
                        </div>
               
                        @if($karir->informasi_tambahan)
                        <div class="section mb-4">
                           <h4 class="section-title">
                                 <i class="fas fa-info-circle me-2"></i> Informasi Tambahan
                           </h4>
                           <div class="section-content">
                                 {!! $karir->informasi_tambahan !!}
                           </div>
                        </div>
                        @endif
                     </div>
               
                     @if($karir->available > 0 && now()->lt(Carbon\Carbon::parse($karir->tanggal_berakhir)))
                        <div class="karir-action mt-4">
                           @if(!$alreadyRegistered)
                                 <a href="{{ route('karir.dashuser.lamar', $karir->slug) }}" class="btn btn-primary btn-lg w-100">Lamar Sekarang</a>
                           @else
                                 <a href="#" class="btn btn-primary btn-lg w-100">Sudah Melamar</a>
                           @endif
                        </div>
                     @else
                        <div class="karir-action mt-4">
                           <a href="#" class="btn btn-secondary btn-lg w-100 disabled">Lowongan Ditutup</a>
                        </div>
                     @endif
               </div>
            </div>
            <div class="col-lg-4">
               <div class="categories mb-5">
                  <h3>Type Karir</h3>
                  <hr>
                  @if ($typeCount->isEmpty())
                     <p class="text-center">Karir Belum Tersedia</p>
                  @else
                     @foreach ($typeCount as $type)
                           <div class="categories-item d-flex justify-content-between align-items-center">
                              <div class="category-name">
                                 <p>{{ $type->type }}</p>
                              </div>
                              <div class="category-total">
                                 <h4 class="post-title">({{ $type->count }})</h4>
                              </div>
                           </div>
                     @endforeach
                  @endif
               </div>

               <div class="recent-posts">
                  <h3>Karir Lainnya</h3>
                  <hr>
                  <div class="recent-post-list">
                        @if ($karirData->isEmpty())
                           <p class="text-center">Karir Belum Tersedia</p>
                        @else
                           @foreach ($karirData as $data)
                              <div class="recent-post-item">
                                    <div class="post-info">
                                       <h4 class="post-title">{{ $data->title }}</h4>
                                       <div class="post-meta">
                                          <span><i class="fa fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($data->tanggal_mulai)->format('d M Y') }} - {{ \Carbon\Carbon::parse($data->tanggal_berakhir)->format('d M Y') }}</span>
                                       </div>
                                       <a href="{{ route('karir.dashuser.detail', $data->slug) }}" class="read-more-btn">Selengkapnya</a>
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

@endsection