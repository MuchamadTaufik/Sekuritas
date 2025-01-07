<div class="sidebar-wrapper scrollbar scrollbar-inner">
   <div class="sidebar-content">
      <ul class="nav nav-secondary">
         <li class="nav-item {{ Route::is('dashboard*') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="collapsed" aria-expanded="false">
               <i class="fas fa-home"></i>
               <p>Dashboard</p>
            </a>
         </li>
         
            <li class="nav-section">
               <span class="sidebar-mini-icon">
               <i class="fa fa-ellipsis-h"></i>
               </span>
               <h4 class="text-section">Components</h4>
            </li>
            @if(auth()->user()->can('isSuperadmin') || auth()->user()->can('isAdmin'))
            <li class="nav-item {{ Route::is('category*') ? 'active' : '' }}">
               <a href="{{ route('category') }}">
                  <i class="fas fa-list"></i>
                  <p>Category</p>
               </a>
            </li>
            <li class="nav-item {{ Route::is('kegiatan*') ? 'active' : '' }}">
               <a href="{{ route('kegiatan') }}">
                  <i class="fas fa-building"></i>
                  <p>Kegiatan</p>
               </a>
            </li>
            <li class="nav-item {{ Route::is('rups*') ? 'active' : '' }}">
               <a href="{{ route('rups') }}">
                  <i class="fas fa-file"></i>
                  <p>RUPS</p>
               </a>
            </li>
            <li class="nav-item {{ Route::is('dokumen*') ? 'active' : '' }}">
               <a href="{{ route('dokumen') }}">
                  <i class="fas fa-download"></i>
                  <p>Dokumen Download</p>
               </a>
            </li>
         @endif

         

         @if(auth()->user()->can('isSuperadmin') || auth()->user()->can('isHrd'))
            <li class="nav-item {{ Route::is('karir*') ? 'active' : '' }}">
               <a href="{{ route('karir') }}">
                  <i class="fas fa-user"></i>
                  <p>Karir</p>
               </a>
            </li>
            <li class="nav-item {{ Route::is('jurusan*') ? 'active' : '' }}">
               <a href="{{ route('jurusan') }}">
                  <i class="fas fa-list"></i>
                  <p>Jurusan</p>
               </a>
            </li> 
            <li class="nav-section">
               <span class="sidebar-mini-icon">
               <i class="fa fa-ellipsis-h"></i>
               </span>
               <h4 class="text-section">Data</h4>
            </li>
            <li class="nav-item {{ Route::is('lamaran*') ? 'active' : '' }}">
               <a href="{{ route('lamaran') }}">
                  <i class="fas fa-book"></i>
                  <p>Lamaran</p>
               </a>
            </li> 
         @endif
         
         @if(auth()->user()->can('isSuperadmin') || auth()->user()->can('isAudit'))
            <li class="nav-item {{ Route::is('pengaduan*') ? 'active' : '' }}">
               <a href="{{ route('pengaduan') }}">
                  <i class="fas fa-file"></i>
                  <p>Pengaduan</p>
               </a>
            </li>
         @endif

         @if(auth()->user()->can('isSuperadmin') || auth()->user()->can('isAdmin'))
            <li class="nav-section">
               <span class="sidebar-mini-icon">
               <i class="fa fa-ellipsis-h"></i>
               </span>
               <h4 class="text-section">Graphic</h4>
            </li>

            <li class="nav-item {{ Route::is('trading') ? 'active' : '' }}">
               <a href="{{ route('trading') }}">
                  <i class="fas fa-chart-area"></i>
                  <p>Trading View</p>
               </a>
            </li>
         @endif
      </ul>
   </div>
</div>