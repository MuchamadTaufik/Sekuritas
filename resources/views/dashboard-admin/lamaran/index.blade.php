@extends('dashboard-admin.layouts.main')

@section('container')

   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <div class="d-flex align-items-center">
                     <h4 class="card-title">Lamaran</h4>
                  </div>
               </div>
               <div class="table-responsive">
                  <table id="add-row" class="display table table-striped table-hover">
                     <thead>
                        <tr>
                           <th>No.</th>
                           <th>Nomor Lamar</th>
                           <th>Nama Pelamar</th>
                           <th>Posisi di Lamar</th>
                           <th>Jurusan</th>
                           <th>IPK</th>
                           <th>Pendidikan Terakhir</th>
                           <th>Asal Sekolah</th>
                           <th>Pas Foto</th>
                           <th>Validasi</th>
                           <th style="width: 10%">Action</th>
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
                                 <td>{{ $data->nomor_lamar }}</td>
                                 <td>{{ $data->user->name }}</td>
                                 <td>{{ $data->karir->title }}</td>
                                 <td>{{ $data->jurusan->name }}</td>
                                 <td>{{ $data->ipk }}</td>
                                 <td>{{ $data->pendidikan_terakhir }}</td>
                                 <td>{{ $data->universitas }} </td>
                                 <td>
                                    <img src="{{ asset('storage/' . $data->pas_foto) }}" alt="" style="width: 100px; height:auto; margin: 5px;">
                                 </td>
                                 <td>
                                    @if ($data->status === 'pending')
                                        <div class="form-button-action gap-1">
                                            <form action="{{ route('lamaran.approve', $data->slug) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-primary">Approve</button>
                                            </form>
                                            <form action="{{ route('lamaran.reject', $data->slug) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Reject</button>
                                            </form>
                                        </div>
                                    @else
                                        @php
                                            // Status Badge Mapping
                                            $statusColors = [
                                                'diterima' => 'success',
                                                'ditolak' => 'danger',
                                            ];
                                        @endphp
                                        <span class="badge badge-{{ $statusColors[$data->status] ?? 'secondary' }}">{{ ucfirst($data->status) }}</span>
                                    @endif
                                </td>                                
                                 <td>
                                    <div class="form-button-action">
                                        <a href="{{ route('lamaran.show', $data->slug) }}" type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-success btn-lg" data-original-title="View">
                                            <i class="fa fa-eye"></i>
                                         </a>
                                        @can('isSuperadmin')
                                        <form action="{{ route('karir.delete', $data->slug) }} " method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove" onclick="return confirm('Apakah yakin ingin menghapus data?')">
                                                  <i class="fa fa-times"></i>
                                            </button>
                                         </form>
                                        @endcan
                                       
                                    </div>
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

@endsection