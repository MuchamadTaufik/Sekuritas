@extends('dashboard-user.layouts.main')

@section('container')
   <div class="route mb-5">
      <div class="container-fluid">
         {{-- bg-route start --}}
         @include('dashboard-user.layouts.partials.bg-route-produk')
         {{-- bg-route-end --}}
         <div class="title-route">
            <p class="non-active"><a href="{{ route('/') }}"><i class="fas fa-arrow-left"></i> Kembali</a></p>
            <p>|</p>
            <p class="active">Produk & Layanan</p>
         </div>
      </div>
   </div>

   <div class="perantara-text mb-5">
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <h3>Perantara Pedagang Efek</h3>
               <p>bjb Sekuritas sebagai perusahaan perantara pedagang efek menggunakan aplikasi NEO BOFIS yang memudahkan nasabah untuk bertransaksi efek di mana pun, kapan pun.</p>
               <Jadikan>Kembangkan Investasi anda dengan percaya diri bersama bjb Sekuritas! dengan platform Pedagang Efek kami yang canggih, anda dapat mengakses Pasar Global, menganalisis tren terbaru, dan melakukan transaksi dengan mudah. Jadikan kami mitra terpercaya anda dalam meraih kesuksesan finansial. Bergabunglah sekarang dan raih peluang-peluang baru di dunia Investasi!</p>
            </div>
            <div class="col-md-8">
               <h3>Neo Bofis</h3>
               <p>Aplikasi Online Trading yang dimiliki IDXSTI yang dinamakan ‘Neo Bofis’ terbagi dalam dua kategori yaitu Web Trading dan Mobile Trading. Aplikasi web trading ditujukan untuk nasabah online yang lebih memilih untuk melakukan perdagangan saham. Mengakses web trading Neo Bofis pada alamat www.bofis.id menggunakan browser yang anda sukai. Nasabah disarankan untuk memperbarui web browser pada pc-nya ke versi terbaru untuk mendapatkan kinerja yang terbaik. Nasabah disarankan menggunakan personal computer dengan spesifikasi hardware sekurang-kurangnya memory 8gb dan cpu 4 core 2 ghz. </p>
               <p>Di sisi lain Apps Neo Bofis ditujukan untuk nasabah online dengan mobilisasi yang tinggi dan mengutamakan kepraktisan. Neo Bofis tersedia untuk versi android dan ios dan masing-masing dapat di-unduh di Play Store and App Store. Secara garis besar fitur-fitur utama yang dimiliki oleh aplikasi web dan Mobile Trading dari IDXSTI identik satu sama lain.</p>
            </div>
         </div>
      </div>
   </div>

   <div class="perantara">
      <div class="container">
         <h2>NEO BOFIS WEB & MOBILE APP</h2>
         <div class="row">
            <div class="col-md-4 d-flex justify-content-center align-items-center">
               <div class="left">
                  <img src="img/dashboard-user/bofis1.png" alt="">
               </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center">
               <div class="mid">
                  <img src="img/dashboard-user/bofis.png" alt="">
               </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center">
               <div class="right">
                  <img src="img/dashboard-user/bofis2.png" alt="">
               </div>
            </div>
         </div>
         <div class="web-app d-flex justify-content-center align-items-center">
            <div class="web">
               <a href="https://play.google.com/store/apps/details?id=mpc.flutter.sti">
                  <img src="img/dashboard-user/gplay.png" alt="">
               </a>
            </div>
            <div class="app">
               <a href="https://apps.apple.com/id/app/neo-bofis/id1631517680">
                  <img src="img/dashboard-user/astore.png" alt="">
               </a>
            </div>
         </div>
      </div>
   </div>

   {{-- partner start --}}
   @include('dashboard-user.layouts.partials.partner')
   {{-- partner end --}}
@endsection