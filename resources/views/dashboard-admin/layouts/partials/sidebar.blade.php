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
      </ul>
   </div>
</div>