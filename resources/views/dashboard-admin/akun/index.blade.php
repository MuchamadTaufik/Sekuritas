@extends('dashboard-admin.layouts.main')

@section('container')

   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <div class="d-flex align-items-center">
                     <h4 class="card-title">Kontrol Akun</h4>
                     <a href="{{ route('akun.create') }}" class="btn btn-primary btn-round ms-auto">
                        <i class="fa fa-plus"></i>
                        Tambah Akun
                     </a>
                  </div>
               </div>
               <div class="table-responsive">
                  <table id="add-row" class="display table table-striped table-hover">
                     <thead>
                        <tr>
                           <th>No.</th>
                           <th>Username</th>
                           <th>Email</th>
                           <th>Role</th>
                           <th style="width: 10%">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @if ($akun->isEmpty())
                           <tr>
                              <td colspan="5" class="text-center">Data belum tersedia</td>
                           </tr>
                        @else
                           @foreach ($akun as $data)
                              <tr>
                                 <td>{{ $loop->iteration }}.</td>
                                 <td>{{ $data->name }}</td>
                                 <td>{{ $data->email }} </td>
                                 <td>{{ $data->role }}</td>
                                 <td>
                                    <div class="form-button-action">
                                       <a href="{{ route('akun.edit', $data->id) }}" type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                          <i class="fa fa-edit"></i>
                                       </a>
                                       <form action="{{ route('akun.delete', $data->id) }}" method="POST">
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
