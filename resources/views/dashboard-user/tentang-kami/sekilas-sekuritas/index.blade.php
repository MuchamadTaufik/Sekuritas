@extends('dashboard-user.layouts.main')

@section('container')
   <div class="route">
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

   <div class="sejarah mb-5">
      <div class="container">
         <div class="sejarah-text">
            <div class="row">
               <div class="col-md-12">
                  <h2>bjb Sekuritas</h2>
                  <p>PT. Bank Pembangunan Daerah Jawa Barat dan Banten TBK (bank bjb/BJBR) resmi mendirikan Perusahaan Efek Daerah (PED) pertama di Indonesia bernama bjb Sekuritas. Rencana dan persiapan pembentukan PED akhirnya mendarat dengan diiringi optimisme menjelalang penutupan tahun 2020.</p>
                  <p>Kepastian pendirian bjb Sekuritas ini diperoleh setelah bank bjb menerbitkan akta pendirian PT. bjb Sekuritas Jawa Barat. Perseroan terbatas tersebut akan menjadi anak perusahaan bank bjb yang menaungi pengelolaan PED di Jawa Barat ini.</p>
                  <p>Lembar akta pendirian bjb Sekuritas diteken oleh Direktur Utama bank bjb Yuddy Renaldi, turut hadir menyaksikan Direktur Komersial dan UMKM Nancy Adistyasari, Direktur Utama Dana Pensiun bank bjb Sofi Suryasnia, dan Ketua 1 Yayasan Kesejahteraan Pegawai (YKP) bank bjb Toto Susanto beserta jajarannya selaku pemegang saham.</p>
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
