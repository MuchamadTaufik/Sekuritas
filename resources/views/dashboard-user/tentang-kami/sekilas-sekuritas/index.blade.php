@extends('dashboard-user.layouts.main')

@section('container')
   <div class="route mb-5">
      <div class="container-fluid">
         {{-- bg-route start --}}
         @include('dashboard-user.layouts.partials.bg-route')
         {{-- bg-route-end --}}
         <div class="title-route">
            <p class="non-active"><a href="{{ route('/') }}"><i class="fas fa-arrow-left"></i> Kembali</a></p>
            <p>|</p>
            <p class="active">Sekilas bjb Sekuritas</p>
         </div>
      </div>
   </div>

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

   <div class="sejarah mb-5">
      <div class="container">
         <div class="sejarah-text">
            <div class="row">
               <div class="col-md-7">
                  <h2>bjb Sekuritas</h2>
                  <p>PT. Bank Pembangunan Daerah Jawa Barat dan Banten TBK (bank bjb/BJBR) resmi mendirikan Perusahaan Efek Daerah (PED) pertama di Indonesia bernama bjb Sekuritas. Rencana dan persiapan pembentukan PED akhirnya mendarat dengan diiringi optimisme menjelalang penutupan tahun 2020.</p>
                  <p>Kepastian pendirian bjb Sekuritas ini diperoleh setelah bank bjb menerbitkan akta pendirian PT. bjb Sekuritas Jawa Barat. Perseroan terbatas tersebut akan menjadi anak perusahaan bank bjb yang menaungi pengelolaan PED di Jawa Barat ini.</p>
                  <p>Lembar akta pendirian bjb Sekuritas diteken oleh Direktur Utama bank bjb Yuddy Renaldi, turut hadir menyaksikan Direktur Komersial dan UMKM Nancy Adistyasari, Direktur Utama Dana Pensiun bank bjb Sofi Suryasnia, dan Ketua 1 Yayasan Kesejahteraan Pegawai (YKP) bank bjb Toto Susanto beserta jajarannya selaku pemegang saham.</p>
               </div>
               <div class="col-md-5">
                  <img src="img/dashboard-user/sekuritas.JPG" alt="">
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="visi mb-5">
      <div class="container">
         <img src="img/dashboard-user/visi.jpeg" alt="">
      </div>
   </div>
@endsection