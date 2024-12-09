@extends('dashboard-user.layouts.main')

@section('container')
   <div class="route mb-5">
      <div class="container-fluid">
         {{-- bg-route start --}}
         @include('dashboard-user.layouts.partials.bg-route')
         {{-- bg-route-end --}}
         <div class="title-route">
            <p class="non-active"><a href=""><i class="fas fa-arrow-left"></i> Kembali</a></p>
            <p>|</p>
            <p class="active">Sekilas bjb Sekuritas</p>
         </div>
      </div>
   </div>

   <div class="sekilas-bjb">
      <div class="container">
         <div class="sekilas-text">
            <div class="row">
               <div class="col-md-6">
                  <p>PT bjb Sekuritas Jawa Barat didirikan sejak tahun 2020 tepatnya pada tanggal 23 November 2020 sesuai dengan Akta Pendirian Perusahaan nomor 38 yang dibuat oleh Notaris R. Tendy Suwarman, S.H. di Bandung Jawa Barat.</p>
               </div>
               <div class="col-md-6">
                  <p>bjb Sekuritas memiliki izin usaha sebagai Perantara Pedagang Efek yang diterbitkan pada tanggal 29 Juni 2021 oleh Otoritas Jasa Keuangan sesuai surat OJK No KEP-29/D.04/2021 tanggal 29 Juni 2021 perihal izin usaha PT bjb Sekuritas Jawa Barat sebagai Perusahaan Efek Daerah dan dilanjutkan dengan pengajuan izin ke Bursa Efek Indonesia (BEI) dan mendapat izin pada tanggal 27 September 2021 sesuai surat BEI No. S-06969/BEI.ANG/09-2021.</p>
               </div>
            </div>
            <img src="img/dashboard-user/visi.jpeg" alt="">
      </div>
   </div>
@endsection