<div class="sidebar-wrapper scrollbar scrollbar-inner">
   <div class="sidebar-content">
      <ul class="nav nav-secondary">
         <li class="nav-item {{ Route::is('dashboard*') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="collapsed" aria-expanded="false">
               <i class="fas fa-home"></i>
               <p>Dashboard</p>
            </a>
         </li>
         @can('isAdmin')
            <li class="nav-section">
               <span class="sidebar-mini-icon">
               <i class="fa fa-ellipsis-h"></i>
               </span>
               <h4 class="text-section">Components</h4>
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
         @endcan
         

         @can('isHrd')
            <li class="nav-item {{ Route::is('karir*') ? 'active' : '' }}">
               <a href="{{ route('karir') }}">
                  <i class="fas fa-user"></i>
                  <p>Karir</p>
               </a>
            </li> 
         @endcan
      </ul>
   </div>
</div>