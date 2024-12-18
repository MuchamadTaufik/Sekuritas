@extends('dashboard-user.layouts.main')

@section('container')
   <div class="route">
      <div class="container-fluid">
         {{-- bg-route start --}}
         @include('dashboard-user.layouts.partials.bg-route-hubungan')
         {{-- bg-route-end --}}
         <div class="title-route">
            <p class="non-active"><a href="{{ route('/') }}"><i class="fas fa-arrow-left"></i> Kembali</a></p>
            <p>|</p>
            <p class="active">Download Dokumen</p>
         </div>
      </div>
   </div>

   <div class="download">
      <div class="container">
         <h2>Download Dokumen</h2>
         <hr>
         <table class="table-download">
            <thead>
               <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Hits</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               @if ($dokumen->isEmpty())
                  <tr>
                     <td colspan="4" class="text-center">Data belum tersedia</td>
                  </tr>
               @else
                  @foreach ($dokumen as $data )
                     <tr>
                        <td>{{ $loop->iteration }}.</td>
                        <td>{{ $data->title }} </td>
                        <td>{{ $data->hits }} </td>
                        <td><a href="{{ route('dokumen.download', $data->id) }}" class="btn-download">Download</a></td>
                     </tr>
                  @endforeach
               @endif
            </tbody>
         </table>
      </div>
   </div>
   

   {{-- partner start --}}
   @include('dashboard-user.layouts.partials.partner')
   {{-- partner end --}}
@endsection