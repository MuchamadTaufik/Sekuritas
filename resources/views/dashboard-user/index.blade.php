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

   <!-- Fact Start -->
   <div class="fact">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-3 col-md-6">
                     <div class="fact-item">
                        <a href="">
                           <i class="fa-solid fa-user-plus fa-2x"></i>
                           <h2>Pembukaan Akun</h2>
                        </a>
                     </div>
               </div>
               <div class="col-lg-3 col-md-6">
                     <div class="fact-item">
                        <a href="">
                           <i class="fa-solid fa-chart-column fa-2x"></i>
                           <h2>Aplikasi Trading</h2>
                        </a>
                        
                     </div>
               </div>
               <div class="col-lg-3 col-md-6">
                     <div class="fact-item">
                        <a href="">
                           <i class="fa-solid fa-newspaper fa-2x"></i>
                           <h2>Media</h2>
                        </a>
                     </div>
               </div>
               <div class="col-lg-3 col-md-6">
                     <div class="fact-item">
                        <a href="">
                           <i class="fa-solid fa-book fa-2x "></i>
                           <h2>Panduan</h2>
                        </a>
                     </div>
               </div>
            </div>
         </div>
   </div>
   <!-- Fact Start -->

   <!-- About Start -->
   <div class="about">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6">
                     <div class="about-img">
                        <div class="about-img-1">
                           <img src="img/dashboard-user/abouts.jpg" alt="Image">
                        </div>
                        <div class="about-img-2">
                           <img src="img/dashboard-user/about.jpg" alt="Image">
                        </div>
                     </div>
               </div>
               <div class="col-md-6">
                     <div class="section-header">
                        <p>PT. bjb Sekuritas Jawa Barat</p>
                        <h2>Tentang Kami</h2>
                     </div>
                     <div class="about-text">
                        <p>
                           PT bjb Sekuritas Jawa Barat didirikan sejak tahun 2020 tepatnya pada tanggal 23 November 2020 sesuai dengan Akta Pendirian Perusahaan nomor 38 yang dibuat oleh Notaris R. Tendy Suwarman, S.H. di Bandung Jawa Barat.                        </p>
                        <p>
                           bjb Sekuritas memiliki izin usaha sebagai Perantara Pedagang Efek yang diterbitkan pada tanggal 29 Juni 2021 oleh Otoritas Jasa Keuangan sesuai surat OJK No KEP-29/D.04/2021 tanggal 29 Juni 2021 perihal izin usaha PT bjb Sekuritas Jawa Barat sebagai Perusahaan Efek Daerah dan dilanjutkan dengan pengajuan izin ke Bursa Efek Indonesia (BEI) dan mendapat izin pada tanggal 27 September 2021 sesuai surat BEI No. S-06969/BEI.ANG/09-2021.                        </p>
                     </div>
               </div>
            </div>
         </div>
   </div>
   <!-- About End -->
   
   <!-- Partner Start -->
   
   <!-- Partner End -->

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

   <!-- Blog Start -->
   <div class="blog">
         <div class="container">
            <div class="section-header">
               <h2>Kegiatan Terbaru</h2>
            </div>
            <div class="owl-carousel blog-carousel">
               <div class="blog-item">
                     <div class="blog-img">
                        <img src="img/blog-1.jpg" alt="Blog">
                     </div>
                     <div class="blog-content">
                        <h2 class="blog-title">Lorem ipsum dolor sit amet</h2>
                        <div class="blog-meta">
                           <i class="fa fa-list-alt"></i>
                           <a href="">Category</a>
                           <i class="fa fa-calendar-alt"></i>
                           <p>01-Jan-2045</p>
                        </div>
                        <div class="blog-text">
                           <p>
                                 Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor. Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                           </p>
                           <a class="btn" href="">Read More</a>
                        </div>
                     </div>
               </div>
               <div class="blog-item">
                     <div class="blog-img">
                        <img src="img/blog-2.jpg" alt="Blog">
                     </div>
                     <div class="blog-content">
                        <h2 class="blog-title">Lorem ipsum dolor sit amet</h2>
                        <div class="blog-meta">
                           <i class="fa fa-list-alt"></i>
                           <a href="">Category</a>
                           <i class="fa fa-calendar-alt"></i>
                           <p>01-Jan-2045</p>
                        </div>
                        <div class="blog-text">
                           <p>
                                 Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor. Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                           </p>
                           <a class="btn" href="">Read More</a>
                        </div>
                     </div>
               </div>
               <div class="blog-item">
                     <div class="blog-img">
                        <img src="img/blog-3.jpg" alt="Blog">
                     </div>
                     <div class="blog-content">
                        <h2 class="blog-title">Lorem ipsum dolor sit amet</h2>
                        <div class="blog-meta">
                           <i class="fa fa-list-alt"></i>
                           <a href="">Category</a>
                           <i class="fa fa-calendar-alt"></i>
                           <p>01-Jan-2045</p>
                        </div>
                        <div class="blog-text">
                           <p>
                                 Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor. Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                           </p>
                           <a class="btn" href="">Read More</a>
                        </div>
                     </div>
               </div>
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