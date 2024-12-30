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
            <p class="active">Tata Kelola Perusahaan</p>
         </div>
      </div>
   </div>

   <div class="kelola mb-5">
      <div class="container">
         <div class="row">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
               <div class="card card-kelola-left">
                  <p>Tata Kelola perusahaan mengacu pada peraturan OJK mengenai Perusahaan Efek Daerah (PED) dengan 6 fungsi yang ditetapkan, yaitu:</p>
               </div>
            </div>
            <div class="col-md-6">
               <div class="card card-kelola-right">
                  <p>Fungsi Pemasaran</p>
               </div>
               <div class="card card-kelola-right">
                  <p>Fungsi Kepatuhan</p>
               </div>
               <div class="card card-kelola-right">
                  <p>Fungsi Manajemen Risiko</p>
               </div>
               <div class="card card-kelola-right">
                  <p>Fungsi Teknologi Informasi</p>
               </div>
               <div class="card card-kelola-right">
                  <p>Fungsi Kustodian</p>
               </div>
               <div class="card card-kelola-right">
                  <p>Fungsi Pembukuan</p>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="pedoman">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="image-bjb mb-3">
                  <img src="img/dashboard-user/BJB.png" alt="Image">
               </div>
               <div class="header-pedoman mb-3">
                  <h2 class="mb-0">PEDOMAN DAN TATA TERTIB</h2>
                  <h4>KERJA DIREKSI DAN DEWAN KOMISARIS</h4>
               </div>
               <ol>
                  <li>Peraturan Otoritas Jasa Keuangan Nomor 57/POJK.04/2017 tentang Tata Kelola Perusahaan Efek yang melakukan kegiatan usaha sebagai Penjamin Emisi Efek dan Perantara Perdagangan Efek</li>
                  <li>Peraturan Otoritas Jasa Keuangan Nomor 18/POJK.04/2019 tentang Perusahaan Efek Daerah</li>
                  <li>Anggaran Dasar Perseroan beserta perubahan-perubahanny</li>
               </ol>
            </div>
            <div class="col-md-6">
               <div class="card card-pedoman-pdf">
                  <p>Pedoman Kerja Direksi & Dewan Komisaris 
                     <a href="https://bjbsekuritas.co.id/pdf/pedoman-kerja-direksi-dan-komisaris.pdf" target="_blank">
                        <i class="fas fa-file-pdf"></i>
                     </a>
                  </p>
               </div>
               <div class="card card-pedoman-pdf">
                  <p>Fungsi dan Kebijakan Manajemen Risiko 
                     <a href="https://bjbsekuritas.co.id/pdf/fungsi-dan-kebijakan-manajemen-risiko.pdf" target="_blank">
                        <i class="fas fa-file-pdf"></i>
                     </a>
                  </p>
               </div>
               <div class="card card-pedoman-pdf">
                  <p>Kode Etik Perusahaan 
                     <a href="https://bjbsekuritas.co.id/pdf/KEBIJAKAN%20KODE%20ETIK%20BJB%20SEKURITAS.pdf" target="_blank">
                        <i class="fas fa-file-pdf"></i>
                     </a>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection