@extends('dashboard-user.layouts.main')

@section('container')
   <div class="route mb-5">
      <div class="container-fluid">
         {{-- bg-route start --}}
         @include('dashboard-user.layouts.partials.bg-route-kepatuhan')
         {{-- bg-route-end --}}
         <div class="title-route">
            <p class="non-active"><a href="{{ route('/') }}"><i class="fas fa-arrow-left"></i> Kembali</a></p>
            <p>|</p>
            <p class="active">Fakta Kepatuhan & Audit Internal</p>
         </div>
      </div>
   </div>

   <div class="kepatuhan">
      <div class="container">
         <div class="kepatuhan-text">
            <h2>Whistle Blowing System (WBS)</h2>
            <p>Whistle Blowing System (WBS) adalah mekanisme pengungkapan tindakan indikasi fraud Perusahaan yang dikelola oleh Group Compliance and Internal Audit. Beberapa pengungkapan kejadian indikasi fraud dapat dideteksi melalui informasi yang disampaikan oleh pihak internal dan eksternal melalui Whistle Blowing System.</p>
            <p>Dengan implementasi Whistle Blowing System ini, diharapkan dapat menjadi jembatan komunikasi dan salah satu sarana pelaporan dalam rangka mengoptimalkan fungsi pendeteksian dini (Early Warning System) atas penerapan manajemen risiko secara keseluruhan. Pelaksanaan budaya Good Corporate Governance yang semakin meningkat, diharapkan dapat mendorong pencapaian kinerja perusahaaan dan melindungi kepentingan Stakeholder secara optimal, sehingga akan meningkatkan reputasi (Corporate Value) Perusahaan secara kelembagaan.</p>
            <a href="{{ route('pengaduan.dashuser') }}"><p class="btn btn-primary">WHISTLEBLOWING SYSTEM</p></a>
            <div class="card card-pdf">
               <h3>Pakta Kepatuhan & Audit Internal</h3>
               <a href="/pdf/pakta-kepatuhan-dan-audit-internal.pdf" target="_blank">
                  <i class="fas fa-file-pdf"></i>
               </a>
            </div>
         </div>
      </div>
   </div>
@endsection
