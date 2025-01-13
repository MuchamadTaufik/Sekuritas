@extends('dashboard-user.layouts.main')

@section('container')
    
    <div class="bg-route">
        <img src="/img/dashboard-user/bg-route.jpg" alt="Image">
    </div>

    <div class="profile">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            @include('dashboard-user.layouts.partials.side-profile')
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2">
                                    <a href="{{ route('profile', ['name' => Auth::user()->name]) }}" class="btn btn-primary w-100 d-flex align-items-center justify-content-center">
                                        Profile
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                

                <div class="col-md-8">
                    <div class="card">
                        <h3 class="mb-0">Informasi Lamaran</h3>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                   <thead>
                                      <tr>
                                         <th>No.</th>
                                         <th>Posisi di Lamar</th>
                                         <th>Type Karir</th>
                                         <th>Periode Karir</th>
                                         <th>Status</th>
                                      </tr>
                                   </thead>
                                   <tbody>
                                      @if ($lamaran->isEmpty())
                                         <tr>
                                            <td colspan="11" class="text-center">Data belum tersedia</td>
                                         </tr>
                                      @else
                                         @foreach ($lamaran as $data)
                                            <tr>
                                               <td>{{ $loop->iteration }}.</td>
                                               <td>{{ $data->karir->title }}</td>
                                               <td>{{ $data->karir->type }}</td>
                                               <td>{{ \Carbon\Carbon::parse($data->karir->tanggal_mulai)->format('d M Y') }} - {{ \Carbon\Carbon::parse($data->karir->tanggal_berakhir)->format('d M Y') }} </td>
                                               <td>
                                                    @php
                                                        $statusColors = [
                                                            'diterima' => 'success',
                                                            'ditolak' => 'danger',
                                                            'pending' => 'warning',
                                                        ];
                                                    @endphp
                                                    
                                                    <span class="badge badge-{{ $statusColors[$data->status] ?? 'secondary' }}">
                                                        {{ ucfirst($data->status) }}
                                                    </span>
                                               </td>
                                            </tr>
                                         @endforeach
                                      @endif
                                   </tbody>
                                </table>
                             </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>

    <script>
        function previewImage() {
            const input = document.getElementById('foto');
            const fileSizeError = document.getElementById('fileSizeError');
            if (input.files && input.files[0]) {
                if (input.files[0].size > 2 * 1024 * 1024) {
                    fileSizeError.style.display = 'block';
                    input.value = '';
                } else {
                    fileSizeError.style.display = 'none';
                }
            }
        }
    </script>
@endsection