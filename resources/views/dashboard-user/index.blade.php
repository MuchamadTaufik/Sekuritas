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

   <!-- Video Modal Start-->
   <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-body">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>        
                     <!-- 16:9 aspect ratio -->
                     <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                     </div>
               </div>
            </div>
         </div>
   </div> 
   <!-- Video Modal End -->

   <!-- Fact Start -->
   <div class="fact">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-3 col-md-6">
                     <div class="fact-item">
                        <a href="">
                           <img src="img/icon-4.png" alt="Icon">
                           <h2>Pembukaan Akun</h2>
                        </a>
                     </div>
               </div>
               <div class="col-lg-3 col-md-6">
                     <div class="fact-item">
                        <a href="">
                           <img src="img/icon-7.png" alt="Icon">
                           <h2>Aplikasi Trading</h2>
                        </a>
                        
                     </div>
               </div>
               <div class="col-lg-3 col-md-6">
                     <div class="fact-item">
                        <a href="">
                           <img src="img/icon-1.png" alt="Icon">
                           <h2>Media</h2>
                        </a>
                     </div>
               </div>
               <div class="col-lg-3 col-md-6">
                     <div class="fact-item">
                        <a href="">
                           <img src="img/icon-6.png" alt="Icon">
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
   <div class="partner-carousel-container">
      <div class="partner-logo-track">
         <div class="partner-logo">
            <img src="img/dashboard-user/partner/idclear.png" alt="IDClear">
         </div>
         <div class="partner-logo">
            <img src="img/dashboard-user/partner/idx.png" alt="IDX">
         </div>
         <div class="partner-logo">
            <img src="img/dashboard-user/partner/ksei.png" alt="KSEI">
         </div>
         <div class="partner-logo">
            <img src="img/dashboard-user/partner/ojk.jpg" alt="OJK">
         </div>
         <div class="partner-logo">
            <img src="img/dashboard-user/partner/sipf.png" alt="SIPF">
         </div>
      </div>
   </div>
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
                        <img src="img/icon-1.png" alt="Icon">
                        <h3>Perantara Pedagang Efek</h3>
                        <p>
                           bjb Sekuritas sebagai PED pertama di Indonesia memberikan layanan Pertama Pedagang Efek bagi masyarakat Jawa Barat                        
                        </p>
                     </div>
               </div>
               <div class="col-lg-4 col-md-6">
                     <div class="service-item">
                        <img src="img/icon-2.png" alt="Icon">
                        <h3>Investasi</h3>
                        <p>
                           bjb Sekuritas memberikan Alternatif Investasi bagi warga Jawa Barat, dan memberikan kenyamanan dan keamanan bertransaksi di pasar modal                        
                        </p>
                     </div>
               </div>
               <div class="col-lg-4 col-md-6">
                     <div class="service-item">
                        <img src="img/icon-3.png" alt="Icon">
                        <h3>Pemegang Saham</h3>
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
            <div class="col-md-6">
                  <div class="feature-img">
                     <iframe 
                        src="https://www.youtube.com/embed/ePxMqh7NvUw?autoplay=1&mute=1&playlist=ePxMqh7NvUw&loop=1" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen
                     ></iframe>
                  </div>
            </div>
            <div class="col-md-6">
                  <div class="section-header">
                     <h2>Company Profile</h2>
                  </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Feature End -->


   <!-- Team Start -->
   <div class="team text-center">
      <div class="container">
         <div class="section-header mb-4">
            <h2 class="text-center">Manajemen & Eksekutif Senior</h2>
         </div>
         <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4">
                  <div class="team-item">
                     <div class="team-img">
                        <img src="img/dashboard-user/team/budiman.png" alt="Team Image" class="img-fluid rounded-circle">
                     </div>
                     <div class="team-text mt-3">
                        <h2 class="h5">Muhammad As'adi Budiman</h2>
                        <p class="text-muted">Commissioner</p>
                        <div class="team-social">
                              <a href="" class="mx-2"><i class="fab fa-twitter"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-facebook-f"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-linkedin-in"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-instagram"></i></a>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4">
                  <div class="team-item">
                     <div class="team-img">
                        <img src="img/dashboard-user/team/maryadi.png" alt="Team Image" class="img-fluid rounded-circle">
                     </div>
                     <div class="team-text mt-3">
                        <h2 class="h5">Maryandi Suwondo</h2>
                        <p class="text-muted">President Director</p>
                        <div class="team-social">
                              <a href="" class="mx-2"><i class="fab fa-twitter"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-facebook-f"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-linkedin-in"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-instagram"></i></a>
                        </div>
                     </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                  <div class="team-item">
                     <div class="team-img">
                        <img src="img/dashboard-user/team/yogi.png" alt="Team Image" class="img-fluid rounded-circle">
                     </div>
                     <div class="team-text mt-3">
                        <h2 class="h5">Yogi Heditia Permadi</h2>
                        <p class="text-muted">Director</p>
                        <div class="team-social">
                              <a href="" class="mx-2"><i class="fab fa-twitter"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-facebook-f"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-linkedin-in"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-instagram"></i></a>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4">
                  <div class="team-item">
                     <div class="team-img">
                        <img src="img/dashboard-user/team/agus.png" alt="Team Image" class="img-fluid rounded-circle">
                     </div>
                     <div class="team-text mt-3">
                        <h2 class="h5">Agus Rochman</h2>
                        <p class="text-muted">Group Head Finance & Accounting</p>
                        <div class="team-social">
                              <a href="" class="mx-2"><i class="fab fa-twitter"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-facebook-f"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-linkedin-in"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-instagram"></i></a>
                        </div>
                     </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                  <div class="team-item">
                     <div class="team-img">
                        <img src="img/dashboard-user/team/budi.png" alt="Team Image" class="img-fluid rounded-circle">
                     </div>
                     <div class="team-text mt-3">
                        <h2 class="h5">Budi Nugraha</h2>
                        <p class="text-muted">Group Head of Information Technology & General Affair</p>
                        <div class="team-social">
                              <a href="" class="mx-2"><i class="fab fa-twitter"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-facebook-f"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-linkedin-in"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-instagram"></i></a>
                        </div>
                     </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                  <div class="team-item">
                     <div class="team-img">
                        <img src="img/dashboard-user/team/yongki.png" alt="Team Image" class="img-fluid rounded-circle">
                     </div>
                     <div class="team-text mt-3">
                        <h2 class="h5">Yongki Abdurahman</h2>
                        <p class="text-muted">Group Head of Settlement & Custodian</p>
                        <div class="team-social">
                              <a href="" class="mx-2"><i class="fab fa-twitter"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-facebook-f"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-linkedin-in"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-instagram"></i></a>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4">
                  <div class="team-item">
                     <div class="team-img">
                        <img src="img/dashboard-user/team/risa.png" alt="Team Image" class="img-fluid rounded-circle">
                     </div>
                     <div class="team-text mt-3">
                        <h2 class="h5">Risa Dwitanti</h2>
                        <p class="text-muted">Group Head of Compliance & Internal Audit</p>
                        <div class="team-social">
                              <a href="" class="mx-2"><i class="fab fa-twitter"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-facebook-f"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-linkedin-in"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-instagram"></i></a>
                        </div>
                     </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                  <div class="team-item">
                     <div class="team-img">
                        <img src="img/dashboard-user/team/joko.png" alt="Team Image" class="img-fluid rounded-circle">
                     </div>
                     <div class="team-text mt-3">
                        <h2 class="h5">Joko Hadi Susilo</h2>
                        <p class="text-muted">Group Head Sales & Marketing</p>
                        <div class="team-social">
                              <a href="" class="mx-2"><i class="fab fa-twitter"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-facebook-f"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-linkedin-in"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-instagram"></i></a>
                        </div>
                     </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                  <div class="team-item">
                     <div class="team-img">
                        <img src="img/dashboard-user/team/nuryane.png" alt="Team Image" class="img-fluid rounded-circle">
                     </div>
                     <div class="team-text mt-3">
                        <h2 class="h5">Nuryane Komalasari</h2>
                        <p class="text-muted">Group Head Risk Management</p>
                        <div class="team-social">
                              <a href="" class="mx-2"><i class="fab fa-twitter"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-facebook-f"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-linkedin-in"></i></a>
                              <a href="" class="mx-2"><i class="fab fa-instagram"></i></a>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Team End -->

   <!-- Blog Start -->
   <div class="blog">
         <div class="container">
            <div class="section-header">
               <h2>Artikel Terbaru</h2>
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


   <script>
         class InfiniteCarousel {
            constructor(trackSelector, options = {}) {
               this.track = document.querySelector(trackSelector);
               this.logos = Array.from(this.track.children);
               this.options = {
                     speed: options.speed || 50,  // pixel per second
                     pauseOnHover: options.pauseOnHover ?? true
               };

               this.position = 0;
               this.totalWidth = 0;
               this.animationFrame = null;

               this.init();
            }

            init() {
               // Hitung total lebar logo
               this.logos.forEach(logo => {
                     this.totalWidth += logo.offsetWidth + 
                        (parseInt(getComputedStyle(logo).marginLeft) || 0) +
                        (parseInt(getComputedStyle(logo).marginRight) || 0);
               });

               // Duplikasi logo untuk membuat efek tak terbatas
               this.logos.forEach(logo => {
                     const clone = logo.cloneNode(true);
                     this.track.appendChild(clone);
               });

               // Update logo yang baru
               this.logos = Array.from(this.track.children);

               this.startAnimation();

               if (this.options.pauseOnHover) {
                     this.track.addEventListener('mouseenter', () => this.pause());
                     this.track.addEventListener('mouseleave', () => this.resume());
               }
            }

            startAnimation() {
               const animate = () => {
                     // Geser posisi
                     this.position -= this.options.speed / 60;

                     // Reset posisi jika melewati total lebar
                     if (Math.abs(this.position) >= this.totalWidth) {
                        this.position = 0;
                     }

                     // Terapkan transformasi
                     this.track.style.transform = `translateX(${this.position}px)`;

                     // Lanjutkan animasi
                     this.animationFrame = requestAnimationFrame(animate);
               };

               this.animationFrame = requestAnimationFrame(animate);
            }

            pause() {
               if (this.animationFrame) {
                     cancelAnimationFrame(this.animationFrame);
                     this.animationFrame = null;
               }
            }

            resume() {
               if (!this.animationFrame) {
                     this.startAnimation();
               }
            }
         }

         // Inisialisasi carousel saat dokumen dimuat
         document.addEventListener('DOMContentLoaded', () => {
            new InfiniteCarousel('.partner-logo-track', {
               speed: 50,  // Sesuaikan kecepatan scroll
               pauseOnHover: true
            });
         });
   </script>
@endsection