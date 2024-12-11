@extends('dashboard-user.layouts.main')

@section('container')
   <div class="route">
      <div class="container-fluid">
         {{-- bg-route start --}}
         @include('dashboard-user.layouts.partials.bg-route-karir')
         {{-- bg-route-end --}}
         <div class="title-route">
            <p class="non-active"><a href="{{ route('/') }}"><i class="fas fa-arrow-left"></i> Kembali</a></p>
            <p>|</p>
            <p class="active">bjb Sekuritas Karir</p>
         </div>
      </div>
   </div>

   <div class="karir">
      <div class="container">
         <div class="row gy-5">
            <div class="col-12 col-md-12 mb-3 mb-md-0">
               <div class="card-karir p-3 mb-3 shadow-sm">
                  <div class="row align-items-center">
                     <div class="col-3 d-none d-md-block">
                        <h6 class="mb-0">Information Technology & General Affair</h6>
                     </div>
                     <div class="col-3 d-none d-md-block">
                        <h6 class="mb-0"><i class="bi bi-person-circle"></i> Fresh Graduate</h6>
                     </div>
                     <div class="col-3 d-none d-md-block">
                        <h6 class="mb-0"><i class="bi bi-bag-fill"></i> Rekrutmen Pegawai Tetap</h6>
                     </div>
                     <div class="col-3 text-end d-none d-md-block">
                        <a href="" class="btn btn-karir">READ MORE</a>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12 d-none d-md-block">
                        <p class="text-primary">Bandung, Jawa Barat</p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-6 d-md-none">
                        <h6>Information Technology & General Affair</h6>
                     </div>

                     <div class="col-6 d-md-none text-end">
                        <a href="" class="btn btn-karir">READ MORE</a>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12  d-md-none mb-3">
                        <p class="text-primary text-center">Bandung, Jawa Barat</p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-6 d-md-none"> <!-- Tampilkan hanya pada mobile -->
                        <h6><i class="bi bi-person-circle"></i> Fresh Graduate</h6>
                     </div>
                     <div class="col-6 d-md-none"> <!-- Tampilkan hanya pada mobile -->
                        <h6><i class="bi bi-bag-fill"></i> Rekrutmen Pegawai Tetap</h6>
                     </div>
                  </div>
               </div>
               <div class="card-karir p-3 mb-3 shadow-sm">
                  <div class="row align-items-center">
                     <div class="col-3 d-none d-md-block">
                        <h6 class="mb-0">Information Technology & General Affair</h6>
                     </div>
                     <div class="col-3 d-none d-md-block">
                        <h6 class="mb-0"><i class="bi bi-person-circle"></i> Fresh Graduate</h6>
                     </div>
                     <div class="col-3 d-none d-md-block">
                        <h6 class="mb-0"><i class="bi bi-bag-fill"></i> Rekrutmen Pegawai Tetap</h6>
                     </div>
                     <div class="col-3 text-end d-none d-md-block">
                        <a href="" class="btn btn-karir">READ MORE</a>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12 d-none d-md-block">
                        <p class="text-primary">Bandung, Jawa Barat</p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-6 d-md-none">
                        <h6>Information Technology & General Affair</h6>
                     </div>

                     <div class="col-6 d-md-none text-end">
                        <a href="" class="btn btn-karir">READ MORE</a>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12  d-md-none mb-3">
                        <p class="text-primary text-center">Bandung, Jawa Barat</p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-6 d-md-none"> <!-- Tampilkan hanya pada mobile -->
                        <h6><i class="bi bi-person-circle"></i> Fresh Graduate</h6>
                     </div>
                     <div class="col-6 d-md-none"> <!-- Tampilkan hanya pada mobile -->
                        <h6><i class="bi bi-bag-fill"></i> Rekrutmen Pegawai Tetap</h6>
                     </div>
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