@extends('dashboard-user.layouts.main')

@section('container')
   <!-- Carousel Start -->
   <div class="carousel">
      <div class="container-fluid">
         <div class="owl-carousel">
            <div class="carousel-item">
               <div class="carousel-img">
                  <img src="img/dashboard-user/carousel/carousel-1.png" alt="Image">
               </div>
            </div>
            <div class="carousel-item">
               <div class="carousel-img">
                  <img src="img/dashboard-user/carousel/carousel-2.png" alt="Image">
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Carousel End -->

   @php
   $trading = \App\Models\Trading::latest()->first();
   @endphp

   @if($trading)
      {!! $trading->trading_view !!}
   @endif

   <!-- Fact Start -->
   <div class="fact mb-5">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-3 col-md-6">
                  <a href="https://opening-jb.bofis.id/#/" target="_blank">
                     <div class="fact-item">
                           <i class="fa-solid fa-user-plus fa-2x"></i>
                           <h2>Pembukaan Akun</h2>
                     </div>
                  </a>
               </div>
               <div class="col-lg-3 col-md-6">
                  <a href="https://jb.bofis.id/" target="_blank">
                     <div class="fact-item">
                           <i class="fa-solid fa-chart-column fa-2x"></i>
                           <h2>Aplikasi Trading</h2>
                     </div>
                  </a>
               </div>
               <div class="col-lg-3 col-md-6">
                  <a href="{{ route('kegiatan.dashuser.all') }}">
                     <div class="fact-item">
                           <i class="fa-solid fa-newspaper fa-2x"></i>
                           <h2>Media</h2>
                     </div>
                  </a>
               </div>
               <div class="col-lg-3 col-md-6">
                  <a href="{{ route('download.dashuser') }}">
                     <div class="fact-item">
                           <i class="fa-solid fa-book fa-2x "></i>
                           <h2>Panduan</h2>
                     </div>
                  </a>
               </div>
            </div>
         </div>
   </div>
   <!-- Fact Start -->

   <div class="sekilas-bjb mb-5">
    <div class="container">
       <div class="sekilas-text">
          <div class="row">
             <div class="col-md-4">
                <div class="feature-img">
                   <img src="img/dashboard-user/BJB.png" alt="Image">
                </div>
             </div>
             <div class="col-md-8">
                <p>PT bjb Sekuritas Jawa Barat didirikan sejak tahun 2020 tepatnya pada tanggal 23 November 2020 sesuai dengan Akta Pendirian Perusahaan nomor 38 yang dibuat oleh Notaris R. Tendy Suwarman, S.H. di Bandung Jawa Barat. bjb Sekuritas memiliki izin usaha sebagai Perantara Pedagang Efek yang diterbitkan pada tanggal 29 Juni 2021 oleh Otoritas Jasa Keuangan sesuai surat OJK No KEP-29/D.04/2021 tanggal 29 Juni 2021 perihal izin usaha PT bjb Sekuritas Jawa Barat sebagai Perusahaan Efek Daerah dan dilanjutkan dengan pengajuan izin ke Bursa Efek Indonesia (BEI) dan mendapat izin pada tanggal 27 September 2021 sesuai surat BEI No. S-06969/BEI.ANG/09-2021.</p>
             </div>
          </div>
       </div>
    </div>
 </div>

   <!-- Partner Start -->

   <!-- Partner End -->


   <!-- Feature Start -->
   <div class="feature">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-7">
                  <div class="feature-img">
                     <iframe
                        src="https://www.youtube.com/embed/ePxMqh7NvUw?autoplay=1&mute=1&playlist=ePxMqh7NvUw&loop=1"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                     ></iframe>
                  </div>
            </div>
            <div class="col-md-5">
                  <div class="section-header">
                     <h2>Company Profile</h2>
                  </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Feature End -->

   <!-- Service Start -->
   <div class="service">
    <div class="container">
       <div class="section-header">
          <h2>PT. bjb Sekuritas Jawa Barat</h2>
       </div>
       <div class="row">
          <div class="col-lg-4 col-md-6">
             <div class="service-item">
                <div class="icon-detail">
                   <i class="fa-solid fa-money-bill-transfer fa-2x"></i>
                   <h3>Perantara Pedagang Efek</h3>
                   <i class="fa-solid fa-chevron-down toggle-icon"></i>
                </div>
                   <p>
                      bjb Sekuritas sebagai PED pertama di Indonesia memberikan layanan Pertama Pedagang Efek bagi masyarakat Jawa Barat
                   </p>
                </div>
          </div>
          <div class="col-lg-4 col-md-6">
             <div class="service-item">
                <div class="icon-detail">
                   <i class="fa-solid fa-money-bill-trend-up fa-2x"></i>
                   <h3>Investasi</h3>
                   <i class="fa-solid fa-chevron-down toggle-icon"></i>
                </div>
                <p>
                   bjb Sekuritas memberikan Alternatif Investasi bagi warga Jawa Barat, dan memberikan kenyamanan dan keamanan bertransaksi di pasar modal
                </p>
                </div>
          </div>
          <div class="col-lg-4 col-md-6">
             <div class="service-item">
                <div class="icon-detail">
                   <i class="fa-solid fa-hand-holding-dollar fa-2x"></i>
                   <h3>Pemegang Saham</h3>
                   <i class="fa-solid fa-chevron-down toggle-icon"></i>
                </div>
                <p>
                   bjb Sekuritas didukung Penuh oleh bank bjb untuk mendorong Perubahan Investasi di Jawa Barat
                </p>
                </div>
          </div>
       </div>
    </div>
 </div>
 <!-- Service End -->

   <!-- Blog Start -->
   <div class="blog">
         <div class="container">
            <div class="section-header">
               <h2>Kegiatan Terbaru</h2>
            </div>
            <div class="owl-carousel blog-carousel">
               @if ($kegiatan->isEmpty())
                  <p class="text-center">Kegiatan Belum Tersedia</p>
               @else
                  @foreach ($kegiatan as $data )
                     <div class="blog-item">
                           <div class="blog-img">
                              <img src="{{ asset('storage/' . $data->images) }}" alt="Blog">
                           </div>
                           <div class="blog-content">
                              <h2 class="blog-title">{{ $data->title }} </h2>
                              <div class="blog-meta">
                                 <i class="fa fa-eye"></i>
                                 <a href="">{{ $data->views }} view(s) </a>
                                 <i class="fa fa-calendar-alt"></i>
                                 <p>{{ \Carbon\Carbon::parse($data->tanggal)->format('M d, Y') }}</p>
                              </div>
                              <div class="blog-text">
                                 <article class="my-3 fs-6">
                                    {!! $data->deskripsi !!}
                                 </article>
                                 <a class="btn" href="{{ route('kegiatan.dashuser.show', $data->slug) }}">Read More</a>
                              </div>
                           </div>
                     </div>
                  @endforeach
               @endif
            </div>
         </div>
   </div>
   <!-- Blog End -->

   {{-- Perantara Start --}}
   @include('dashboard-user.layouts.partials.produk')
   {{-- Perantara End --}}

   {{-- partner start --}}
   @include('dashboard-user.layouts.partials.partner')
   {{-- partner end --}}
@endsection
