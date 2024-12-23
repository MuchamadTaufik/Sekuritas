<div class="navbar navbar-expand-lg bg-dark navbar-dark">
   <div class="container-fluid">
      <a href="{{ route('/') }}" class="navbar-brand">
         <img id="logo" src="/img/dashboard-user/logo.png" alt="">
      </a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
         <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
         <div class="navbar-nav ml-auto">
            <div class="nav-item dropdown">
               <a href="#" class="nav-link dropdown-toggle {{ Route::is('sekilas*','sejarah*','struktur*','kepatuhan*','kelola*') ? 'active' : '' }}" data-toggle="dropdown">Tentang Kami</a>
               <div class="dropdown-menu">
                  <a href="{{ route('sekilas.dashuser') }}" class="dropdown-item {{ Route::is('sekilas*') ? 'active' : '' }}">Sekilas bjb Sekuritas</a>
                  <a href="{{ route('struktur.dashuser') }}" class="dropdown-item {{ Route::is('struktur*') ? 'active' : '' }}">Struktur Organisasi</a>
                  <a href="{{ route('kepatuhan.dashuser') }}" class="dropdown-item {{ Route::is('kepatuhan*') ? 'active' : '' }}">Fakta Kepatuhan & Audit Internal</a>
                  <a href="{{ route('kelola.dashuser') }}" class="dropdown-item {{ Route::is('kelola*') ? 'active' : '' }}">Tata Kelola Perusahaan</a>
               </div>
            </div>
            <div class="nav-item">
               <a href="{{ route('perantara.dashuser') }}" class="nav-link {{ Route::is('perantara*') ? 'active' : '' }}">Produk & Layanan</a>
            </div>
            <div class="nav-item dropdown">
               <a href="#" class="nav-link dropdown-toggle {{ Route::is('rups*','download*') ? 'active' : '' }}" data-toggle="dropdown">Hubungan Investor</a>
               <div class="dropdown-menu">
                  <a href="{{ route('rups.dashuser') }}" class="dropdown-item {{ Route::is('rups*') ? 'active' : '' }}">RUPS</a>
                  <a href="{{ route('download.dashuser') }}" class="dropdown-item {{ Route::is('download*') ? 'active' : '' }}">Download</a>
               </div>
            </div>
            <a href="{{ route('karir.dashuser') }}" class="nav-item nav-link {{ Route::is('karir*') ? 'active' : '' }}">Karir</a>
            @can('isAdmin')
               <a href="{{ route('dashboard') }}" class="nav-item nav-link">Dashboard</a>
            @endcan
            @can('isHrd')
               <a href="{{ route('dashboard') }}" class="nav-item nav-link">Dashboard</a>
            @endcan
         </div>
      </div>
   </div>
</div>