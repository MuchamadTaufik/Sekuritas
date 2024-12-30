@extends('dashboard-admin.layouts.main')

@section('container')

   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <div class="d-flex align-items-center">
                     <h4 class="card-title">Whistle Blowing System</h4>
                  </div>
               </div>
               <div class="table-responsive">
                  <table id="add-row" class="display table table-striped table-hover">
                     <thead>
                        <tr>
                           <th>No.</th>
                           <th>Nama Pelapor</th>
                           <th>Email</th>
                           <th>Lokasi Pelanggaran</th>
                           <th>Tanggal Pelanggaran</th>
                           <th>Waktu Pelanggaran</th>
                           <th>Nama Pelaku Pelanggaran</th>
                           <th>Uraian Kejadian</th>
                           <th>Dokumen Pendukung</th>
                           <th style="width: 10%">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @if ($pengaduan->isEmpty())
                           <tr>
                              <td colspan="10" class="text-center">Data belum tersedia</td>
                           </tr>
                        @else
                           @foreach ($pengaduan as $data)
                              <tr>
                                 <td>{{ $loop->iteration }}.</td>
                                 <td>{{ $data->name }}</td>
                                 <td>{{ $data->email }}</td>
                                 <td>{{ $data->lokasi }}</td>
                                 <td>{{ $data->tanggal }}</td>
                                 <td>{{ $data->waktu }}</td>
                                 <td>{{ $data->nama_pelaku }}</td>
                                 <td>{{ $data->uraian_kejadian }}</td>
                                 <td>
                                    @if ($data->pdf)
                                      <a href="{{ asset('storage/' . $data->pdf) }}" target="_blank"><i class="fa fa-file"></i></a>
                                    @endif
                                  </td>
                                 <td>
                                    <div class="form-button-action">
                                       <a href="" type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                          <i class="fa fa-edit"></i>
                                       </a>
                                       <form action="{" method="POST">
                                          @csrf
                                          @method('delete')
                                          <button type="submit" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove" onclick="return confirm('Apakah yakin ingin menghapus data?')">
                                                <i class="fa fa-times"></i>
                                          </button>
                                       </form>
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