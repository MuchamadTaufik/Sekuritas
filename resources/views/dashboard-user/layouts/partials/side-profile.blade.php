<div class="d-flex flex-column align-items-center">
    <img id="foto-preview" src="{{ auth()->user()->biodata && auth()->user()->biodata->foto ? asset('storage/foto/' . auth()->user()->biodata->foto) : asset('assets/img/profile.jpg') }}" alt="{{ auth()->user()->name }}" class="img-fluid rounded-circle mb-3" style="object-fit: cover; width: 150px; height: 150px"/>
    <h5 class="card-title text-center">{{ auth()->user()->name}}</h5>
</div>
<hr>
<ul class="list-unstyled mb-4">
    <li class="mb-2 d-flex align-items-center">
        <i class="fas fa-home me-3"></i> {{ auth()->user()->biodata->alamat ?? '-' }}
    </li>
    <li class="mb-2 d-flex align-items-center">
        <i class="fas fa-phone me-3"></i> {{ auth()->user()->biodata->no_telp ?? '-' }}
    </li>
    <li class="mb-2 d-flex align-items-center">
        <i class="fas fa-user me-3"></i> {{ auth()->user()->biodata->gender ?? '-' }}
    </li>
    <li class="mb-2 d-flex align-items-center">
        <i class="fas fa-calendar me-3"></i> {{ auth()->user()->biodata->tanggal_lahir ?? '-' }}
    </li>
</ul>
<hr>