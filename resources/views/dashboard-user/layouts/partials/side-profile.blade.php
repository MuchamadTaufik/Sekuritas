<div class="d-flex flex-column align-items-center">
    <img id="foto-preview" src="{{ $user->biodata && $user->biodata->foto ? asset('storage/foto/' . $user->biodata->foto) : asset('assets/img/profile.jpg') }}" alt="{{ $user->name }}" class="img-fluid rounded-circle mb-3" style="object-fit: cover; width: 150px; height: 150px"/>
    <h5 class="card-title text-center">{{ $user->name}}</h5>
</div>
<hr>
<ul class="list-unstyled mb-4">
    <li class="mb-2 d-flex align-items-center">
        <i class="fas fa-home me-3"></i> {{ $user->biodata->alamat ?? '-' }}
    </li>
    <li class="mb-2 d-flex align-items-center">
        <i class="fas fa-phone me-3"></i> {{ $user->biodata->no_telp ?? '-' }}
    </li>
    <li class="mb-2 d-flex align-items-center">
        <i class="fas fa-user me-3"></i> {{ $user->biodata->gender ?? '-' }}
    </li>
    <li class="mb-2 d-flex align-items-center">
        <i class="fas fa-calendar me-3"></i> {{ $user->biodata->tanggal_lahir ?? '-' }}
    </li>
</ul>
<hr>