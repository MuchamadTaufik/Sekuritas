@extends('dashboard-user.layouts.main')

@section('container')
   <div class="route mb-5">
      <div class="container-fluid">
         {{-- bg-route start --}}
         @include('dashboard-user.layouts.partials.bg-route-kepatuhan')
         {{-- bg-route-end --}}
         <div class="title-route">
            <p class="non-active"><a href="{{ route('kepatuhan.dashuser') }}"><i class="fas fa-arrow-left"></i> Kembali</a></p>
            <p>|</p>
            <p class="active">Whistleblowing System</p>
         </div>
      </div>
   </div>

   <div class="pengaduan">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="card-pengaduan">
                  <div class="card-header-pengaduan">
                     <span>Form Pengaduang</span>
                  </div>
                  <div class="card-body-pengaduan">
                     <form action="{{ route('pengaduan.dashuser.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukan Nama Samaran..." value="{{ old('name') }}" required />
                                 @error('name')
                                    <div class="invalid-feedback">
                                       {{ $message }}
                                    </div>
                                 @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukan Email.." value="{{ old('email') }}" required />
                                 @error('email')
                                    <div class="invalid-feedback">
                                       {{ $message }}
                                    </div>
                                 @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" placeholder="Lokasi Pelanggaran.." value="{{ old('lokasi') }}" required />
                                 @error('lokasi')
                                    <div class="invalid-feedback">
                                       {{ $message }}
                                    </div>
                                 @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" placeholder="Tanggal Pelanggaran.." value="{{ old('tanggal') }}" required />
                                 @error('tanggal')
                                    <div class="invalid-feedback">
                                       {{ $message }}
                                    </div>
                                 @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <input type="time" class="form-control @error('waktu') is-invalid @enderror" id="waktu" name="waktu" placeholder="Waktu Pelanggaran.." value="{{ old('waktu') }}" required />
                                 @error('waktu')
                                    <div class="invalid-feedback">
                                       {{ $message }}
                                    </div>
                                 @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <input type="text" class="form-control @error('nama_pelaku') is-invalid @enderror" id="nama_pelaku" name="nama_pelaku" placeholder="Nama Pelaku Pelanggaran.." value="{{ old('nama_pelaku') }}" required />
                                 @error('nama_pelaku')
                                    <div class="invalid-feedback">
                                       {{ $message }}
                                    </div>
                                 @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <textarea class="form-control @error('uraian_kejadian') is-invalid @enderror" id="uraian_kejadian" name="uraian_kejadian" placeholder="Uraian Kejadian.." required>{{ old('uraian_kejadian') }}</textarea>
                                 @error('uraian_kejadian')
                                    <div class="invalid-feedback">
                                       {{ $message }}
                                    </div>
                                 @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <input type="file" class="form-control @error('pdf') is-invalid @enderror" id="pdf" name="pdf" onchange="previewPDF()" required />
                                 <small class="form-text text-muted">Maksimal ukuran file (4MB)</small>
                                 @error('pdf')
                                    <div class="invalid-feedback">
                                       {{ $message }}
                                    </div>
                                 @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <button type="submit" class="btn btn-primary btn-block">Kirim Pengaduan</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="faq-item">
                  <div class="faq-question">
                     <span>WHAT</span>
                     <svg class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                     </svg>
                  </div>
                  <div class="faq-answer">
                     <p>Apa perbuatan berindikasi Tindak Pidana Korupsi/Pelanggaran yang diketahui.</p>
                  </div>
               </div>
               <div class="faq-item">
                  <div class="faq-question">
                     <span>WHO</span>
                     <svg class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                     </svg>
                  </div>
                  <div class="faq-answer">
                     <p>Siapa yang bertanggung jawab/terlibat dan terkait dalam perbuatan tersebut.</p>
                  </div>
               </div>
               <div class="faq-item">
                  <div class="faq-question">
                     <span>WHERE</span>
                     <svg class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                     </svg>
                  </div>
                  <div class="faq-answer">
                     <p>Dimana tempat terjadinya perbuatan tersebut dilakukan.</p>
                  </div>
               </div>
               <div class="faq-item">
                  <div class="faq-question">
                     <span>WHEN</span>
                     <svg class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                     </svg>
                  </div>
                  <div class="faq-answer">
                     <p>Kapan waktu perbuatan tersebut dilakukan.</p>
                  </div>
               </div>
               <div class="faq-item">
                  <div class="faq-question">
                     <span>HOW</span>
                     <svg class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                     </svg>
                  </div>
                  <div class="faq-answer">
                     <p>Bagaimana cara perbuatan tersebut dilakukan (modus, cara dan sebagainya).</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

@endsection
