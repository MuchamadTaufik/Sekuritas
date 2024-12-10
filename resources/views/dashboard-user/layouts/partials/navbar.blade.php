<div class="navbar navbar-expand-lg bg-dark navbar-dark">
   <div class="container-fluid">
      <a href="{{ route('/') }}" class="navbar-brand">
         <img id="logo" src="img/dashboard-user/logo.png" alt="">
      </a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
         <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
         <div class="navbar-nav ml-auto">
            <div class="nav-item dropdown">
               <a href="#" class="nav-link dropdown-toggle {{ Route::is('sekilas*','sejarah*','struktur*','kepatuhan*') ? 'active' : '' }}" data-toggle="dropdown">Tentang Kami</a>
               <div class="dropdown-menu">
                  <a href="{{ route('sekilas.dashuser') }}" class="dropdown-item {{ Route::is('sekilas*') ? 'active' : '' }}">Sekilas bjb Sekuritas</a>
                  <a href="{{ route('struktur.dashuser') }}" class="dropdown-item {{ Route::is('struktur*') ? 'active' : '' }}">Struktur Organisasi</a>
                  <a href="{{ route('kepatuhan.dashuser') }}" class="dropdown-item {{ Route::is('kepatuhan*') ? 'active' : '' }}">Fakta Kepatuhan & Audit Internal</a>
               </div>
            </div>
            <div class="nav-item dropdown">
               <a href="#" class="nav-link dropdown-toggle {{ Route::is('kelola*','pedoman*','kebijakan*', 'etik*') ? 'active' : '' }}" data-toggle="dropdown">Tata Kelola</a>
               <div class="dropdown-menu">
                  <a href="{{ route('kelola.dashuser') }}" class="dropdown-item {{ Route::is('kelola*') ? 'active' : '' }}">Tata Kelola Perusahaan</a>
                  <a href="{{ route('pedoman.dashuser') }}" class="dropdown-item {{ Route::is('pedoman*') ? 'active' : '' }}">Pedoman Kerja Direksi & Dewan Komisaris </a>
                  <a href="{{ route('kebijakan.dashuser') }}" class="dropdown-item {{ Route::is('kebijakan*') ? 'active' : '' }}">Kebijakan-Kebijakan</a>
                  <a href="{{ route('etik.dashuser') }}" class="dropdown-item {{ Route::is('etik*') ? 'active' : '' }}">Kode Etik</a>
               </div>
            </div>
            <div class="nav-item dropdown">
               <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Produk & Layanan</a>
               <div class="dropdown-menu">
                  <a href="blog.html" class="dropdown-item">Perantara Pedagang Efek</a>
                  <a href="" class="dropdown-item">Bofis Online Trading</a>
               </div>
            </div>
            <div class="nav-item dropdown">
               <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Hubungan Investor</a>
               <div class="dropdown-menu">
                  <a href="blog.html" class="dropdown-item">RUPS</a>
                  <a href="" class="dropdown-item">Download</a>
               </div>
            </div>
            <a href="service.html" class="nav-item nav-link">Karir</a>
         </div>
      </div>
   </div>
</div>