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
            <p class="active">Download</p>
         </div>
      </div>
   </div>

   <div class="download">
      <div class="container">
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
               <tr>
                  <td>1</td>
                  <td>File A</td>
                  <td>100</td>
                  <td><a href="#" class="btn-download">Download</a></td>
               </tr>
               <tr>
                  <td>2</td>
                  <td>File B</td>
                  <td>150</td>
                  <td><a href="#" class="btn-download">Download</a></td>
               </tr>
               <tr>
                  <td>3</td>
                  <td>File C</td>
                  <td>200</td>
                  <td><a href="#" class="btn-download">Download</a></td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
   

   {{-- partner start --}}
   @include('dashboard-user.layouts.partials.partner')
   {{-- partner end --}}
@endsection