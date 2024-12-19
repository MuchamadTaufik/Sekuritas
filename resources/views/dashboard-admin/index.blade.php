@extends('dashboard-admin.layouts.main')

@section('container')
   <div class="page-inner">
      <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
      <div>
         <h3 class="fw-bold mb-3">Dashboard</h3>
      </div>
      </div>
      <div class="row">
         <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
               <div class="card-body">
                  <div class="row align-items-center">
                     <div class="col-icon">
                        <div class="icon-big text-center icon-primary bubble-shadow-small">
                           <i class="fas fa-users"></i>
                        </div>
                     </div>
                     <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                           <p class="card-category">Kegiatan</p>
                           <h4 class="card-title">{{ $totalKegiatan }} </h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      <div class="col-sm-6 col-md-3">
         <div class="card card-stats card-round">
            <div class="card-body">
               <div class="row align-items-center">
                  <div class="col-icon">
                     <div class="icon-big text-center icon-info bubble-shadow-small">
                        <i class="fas fa-user-check"></i>
                     </div>
                  </div>
                  <div class="col col-stats ms-3 ms-sm-0">
                     <div class="numbers">
                        <p class="card-category">RUPS</p>
                        <h4 class="card-title">{{ $totalRups }} </h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-6 col-md-3">
         <div class="card card-stats card-round">
            <div class="card-body">
               <div class="row align-items-center">
                  <div class="col-icon">
                     <div class="icon-big text-center icon-success bubble-shadow-small">
                        <i class="fas fa-luggage-cart"></i>
                     </div>
                  </div>
                  <div class="col col-stats ms-3 ms-sm-0">
                     <div class="numbers">
                        <p class="card-category">Dokumen</p>
                        <h4 class="card-title">{{ $totalDokumen }} </h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-6 col-md-3">
         <div class="card card-stats card-round">
            <div class="card-body">
               <div class="row align-items-center">
                  <div class="col-icon">
                     <div class="icon-big text-center icon-secondary bubble-shadow-small">
                        <i class="far fa-check-circle"></i>
                     </div>
                  </div>
                  <div class="col col-stats ms-3 ms-sm-0">
                     <div class="numbers">
                        <p class="card-category">Pengguna</p>
                        <h4 class="card-title">{{ $totalUser }} </h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="card card-round">
               <div class="card-header">
                  <div class="card-head-row">
                     <div class="card-title">User Statistics</div>
                  </div>
               </div>
               <div class="card-body">
                  <div class="chart-container" style="min-height: 375px">
                        {!! $chart->container() !!}
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <script src="{{ $chart->cdn() }}"></script>

   {{ $chart->script() }}
@endsection