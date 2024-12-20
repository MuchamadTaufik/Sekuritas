@extends('dashboard-admin.layouts.main')

@section('container')

   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <div class="d-flex align-items-center">
                     <h4 class="card-title">bjb Sekuritas Karir</h4>
                     <a href="{{ route('karir.create') }}" class="btn btn-primary btn-round ms-auto">
                        <i class="fa fa-plus"></i>
                        Tambah Info Karir
                     </a>
                  </div>
               </div>
               <div class="table-responsive">
                  <table id="add-row" class="display table table-striped table-hover">
                     <thead>
                        <tr>
                           <th>No.</th>
                           <th>Nama Karir</th>
                           <th>Type</th>
                           <th>Tanggal Mulai</th>
                           <th>Tanggal Berakhir</th>
                           <th>Kuota</th>
                           <th>Available</th>
                           <th style="width: 10%">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @if ($karir->isEmpty())
                           <tr>
                              <td colspan="9" class="text-center">Data belum tersedia</td>
                           </tr>
                        @else
                           @foreach ($karir as $data)
                              <tr>
                                 <td>{{ $loop->iteration }}.</td>
                                 <td>{{ $data->title }}</td>
                                 <td>{{ $data->type }}</td>
                                 <td>{{ $data->tanggal_mulai }}</td>
                                 <td>{{ $data->tanggal_berakhir }}</td>
                                 <td>{{ $data->kuota }}</td>
                                 <td>{{ $data->available }}</td>
                                 <td>
                                    <div class="form-button-action">
                                        <a href="{{ route('karir.show', $data->slug) }}" type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-success btn-lg" data-original-title="View">
                                            <i class="fa fa-eye"></i>
                                         </a>
                                       <a href="{{ route('karir.edit', $data->slug) }}" type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                          <i class="fa fa-edit"></i>
                                       </a>
                                       <form action="{{ route('karir.delete', $data->slug) }} " method="POST">
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