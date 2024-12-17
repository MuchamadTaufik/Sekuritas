@extends('dashboard-admin.layouts.main')

@section('container')

   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <div class="d-flex align-items-center">
                     <h4 class="card-title">Rapat Umum Pemegang Saham (RUPS)</h4>
                     <a href="{{ route('rups.create') }}" class="btn btn-primary btn-round ms-auto">
                        <i class="fa fa-plus"></i>
                        Tambah RUPS
                     </a>
                  </div>
               </div>
               <div class="table-responsive">
                  <table id="add-row" class="display table table-striped table-hover">
                     <thead>
                        <tr>
                           <th>No.</th>
                           <th>Nama</th>
                           <th>File</th>
                           <th style="width: 10%">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @if ($rups->isEmpty())
                           <tr>
                              <td colspan="4" class="text-center">Data belum tersedia</td>
                           </tr>
                        @else
                           @foreach ($rups as $data)
                              <tr>
                                 <td>{{ $loop->iteration }}.</td>
                                 <td>{{ $data->title }}</td>
                                 <td>
                                    @if ($data->pdf)
                                      <a href="{{ asset('storage/' . $data->pdf) }}" target="_blank"><i class="fa fa-file"></i></a>
                                    @endif
                                  </td>
                                 <td>
                                    <div class="form-button-action">
                                       <a href="{{ route('rups.edit', $data->slug) }}" type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                          <i class="fa fa-edit"></i>
                                       </a>
                                       <form action="{{ route('rups.delete', $data->slug) }}" method="POST">
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