@extends('dashboard-user.layouts.main')

@section('container')
   <div class="route mb-5">
      <div class="container-fluid">
         {{-- bg-route start --}}
         @include('dashboard-user.layouts.partials.bg-route-bantuan')
         {{-- bg-route-end --}}
         <div class="title-route">
            <p class="non-active"><a href="{{ route('/') }}"><i class="fas fa-arrow-left"></i> Kembali</a></p>
            <p>|</p>
            <p class="active">FAQ</p>
         </div>
      </div>
   </div>

   <div class="faq">
      <h2>Frequently Asked Questions (FAQ)</h2>
      
      <div class="faq-item">
         <div class="faq-question">
            <span>Prosedur Penanganan Pesanan Tertunda</span>
            <svg class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
               <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
         </div>
         <div class="faq-answer">
            <p>Nasabah dapat menghubungi Customer Service bjb Sekuritas di Nomor Telepon 022-4211415 atau bisa langsung menghubungi Staff Sales dan/atau Dealer bjb Sekuritas untuk dilayani pesanannya secara manual sesuai dengan standar operasional yang berlaku.</p>
         </div>
      </div>

      <div class="faq-item">
         <div class="faq-question">
            <span>Pemberitahuan Permasalahan Sistem</span>
            <svg class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
               <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
         </div>
         <div class="faq-answer">
            <p>Nasabah akan menerima laporan terjadinya masalah segera pada saat kejadian (H+0) melalui email dan media sosial milik bjb Sekuritas</p>
         </div>
      </div>
   </div>

   {{-- partner start --}}
   @include('dashboard-user.layouts.partials.partner')
   {{-- partner end --}}

@endsection