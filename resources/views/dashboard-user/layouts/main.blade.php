<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Confer - Consulting Website Template Free Download</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="Consulting Website Template Free Download" name="keywords">
      <meta content="Consulting Website Template Free Download" name="description">

      <!-- Favicon -->
      <link href="/img/favicon.ico" rel="icon">

      <!-- Google Font -->
      <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
      
      <!-- CSS Libraries -->
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
      <link href="/lib/animate/animate.min.css" rel="stylesheet">
      <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

      <!-- Template Stylesheet -->
      <link href="/css/style.css" rel="stylesheet">
   </head>

   <body>
      <!-- Top Bar Start -->
      @include('dashboard-user.layouts.partials.topbar')
      <!-- Top Bar End -->

      <!-- Nav Bar Start -->
      @include('dashboard-user.layouts.partials.navbar')
      <!-- Nav Bar End -->

         @yield('container')


      <!-- Footer Start -->
      @include('dashboard-user.layouts.partials.footer')
      <!-- Footer End -->

      <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

      <!-- JavaScript Libraries -->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
      <script src="/lib/easing/easing.min.js"></script>
      <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
      <script src="/lib/waypoints/waypoints.min.js"></script>
      <script src="/lib/counterup/counterup.min.js"></script>
      
      <!-- Contact Javascript File -->
      <script src="/mail/jqBootstrapValidation.min.js"></script>
      <script src="/mail/contact.js"></script>

      <!-- Template Javascript -->
      <script src="/js/main.js"></script>
      <script>
            // Get the navbar element and logo element
            const navbar = document.querySelector('.navbar');
            const logo = document.getElementById('logo');
         
            // Define the logo images
            const staticLogoSrc = 'img/dashboard-user/logo.png';
            const stickyLogoSrc = 'img/dashboard-user/logo2.png';
         
            // Add a scroll event listener to the window
            window.addEventListener('scroll', function() {
            // Check if the navbar has the 'nav-sticky' class
            if (navbar.classList.contains('nav-sticky')) {
               // Change the logo to the sticky version
               logo.src = stickyLogoSrc;
            } else {
               // Change the logo to the static version
               logo.src = staticLogoSrc;
            }
            });
      </script>
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
   <script>
      document.addEventListener('DOMContentLoaded', () => {
            const faqQuestions = document.querySelectorAll('.faq-question');
            
            faqQuestions.forEach(question => {
               question.addEventListener('click', () => {
                     const answer = question.nextElementSibling;
                     const isActive = answer.classList.contains('active');

                     // Close all answers first
                     document.querySelectorAll('.faq-answer').forEach(a => {
                        a.classList.remove('active');
                        a.previousElementSibling.classList.remove('active');
                     });

                     // Toggle current answer if not already open
                     if (!isActive) {
                        answer.classList.add('active');
                        question.classList.add('active');
                     }
               });
            });
         });
   </script>
   </body>
</html>
