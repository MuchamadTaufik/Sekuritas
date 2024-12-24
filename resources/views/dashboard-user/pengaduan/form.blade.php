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
            <p class="active">Whistleblowing System</p>
         </div>
      </div>
   </div>

   <div class="pengaduan">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card-pengaduan">
                    <div class="card-header-pengaduan">
                        <span>Langkah-Langkah Membuat Laporan</span>
                    </div>
                    <div class="card-body-pengaduan">
                        <form action="pengaduan.dashuser.store'" method="POST">
                            @csrf

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="faq-item">
                    <div class="faq-question">
                       <span>WHAT</span>
                       <svg class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polyline points="6 9 12 15 18 9"></polyline>
                       </svg>
                    </div>
                    <div class="faq-answer">
                        <p>Apa perbuatan berindikasi Tindak Pidana Korupsi/Pelanggaran yang diketahui.</p>
                    </div>
                 </div>
                 <div class="faq-item">
                    <div class="faq-question">
                       <span>WHO</span>
                       <svg class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polyline points="6 9 12 15 18 9"></polyline>
                       </svg>
                    </div>
                    <div class="faq-answer">
                        <p>Siapa yang bertanggung jawab/terlibat dan terkait dalam perbuatan tersebut.</p>
                    </div>
                 </div>
                 <div class="faq-item">
                    <div class="faq-question">
                       <span>WHERE</span>
                       <svg class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polyline points="6 9 12 15 18 9"></polyline>
                       </svg>
                    </div>
                    <div class="faq-answer">
                        <p>Dimana tempat terjadinya perbuatan tersebut dilakukan.</p>
                    </div>
                 </div>
                 <div class="faq-item">
                    <div class="faq-question">
                       <span>WHEN</span>
                       <svg class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polyline points="6 9 12 15 18 9"></polyline>
                       </svg>
                    </div>
                    <div class="faq-answer">
                        <p>Kapan waktu perbuatan tersebut dilakukan.</p>
                    </div>
                 </div>
                 <div class="faq-item">
                    <div class="faq-question">
                       <span>HOW</span>
                       <svg class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polyline points="6 9 12 15 18 9"></polyline>
                       </svg>
                    </div>
                    <div class="faq-answer">
                        <p>Bagaimana cara perbuatan tersebut dilakukan (modus, cara dan sebagainya).</p>
                    </div>
                 </div>
            </div>
        </div>
    </div>
   </div>

   {{-- partner start --}}
   @include('dashboard-user.layouts.partials.partner')
   {{-- partner end --}}

@endsection