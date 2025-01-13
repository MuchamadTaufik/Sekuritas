@extends('dashboard-user.layouts.main')

@section('container')
   <div class="route mb-5">
      <div class="container-fluid">
         {{-- bg-route start --}}
         @include('dashboard-user.layouts.partials.bg-route-karir')
         {{-- bg-route-end --}}
         <div class="title-route">
            <p class="non-active"><a href="{{ route('/') }}"><i class="fas fa-arrow-left"></i> Kembali</a></p>
            <p>|</p>
            <p class="non-active"><a href="{{ route('karir.dashuser') }}">Karir</a></p>
            <p>|</p>
            <p class="active">{{ $karir->title }}</p>
         </div>
      </div>
   </div>

   <div class="detail-karir">
    <div class="container">
       <div class="section-header">
          <h2>{{ $karir->title }}</h2>
       </div>
       <div class="row">
          <div class="col-lg-12">
                <div class="karir-detail-card">
                   <div class="karir-header mb-4">
                      <div class="d-flex justify-content-between align-items-center flex-wrap">
                         <span class="badge bg-primary text-white mb-2">{{ $karir->type }}</span>
                         <div class="status-badges">
                               <span class="badge text-white {{ $karir->available > 0 ? 'bg-success' : 'bg-danger' }}">
                                  {{ $karir->available > 0 ? 'Open' : 'Closed' }}
                               </span>
                         </div>
                      </div>
                   </div>
             
                   <div class="karir-meta mb-4">
                      <div class="row g-3">
                         <div class="col-md-6">
                               <div class="meta-item">
                                  <i class="fas fa-calendar-alt text-primary"></i>
                                  <div>
                                     <small class="text-muted">Periode Karir</small>
                                     <p class="mb-0">{{ \Carbon\Carbon::parse($karir->tanggal_mulai)->format('d M Y') }} - {{ \Carbon\Carbon::parse($karir->tanggal_berakhir)->format('d M Y') }}</p>
                                  </div>
                               </div>
                         </div>
                         <div class="col-md-6">
                               <div class="meta-item">
                                  <i class="fas fa-graduation-cap text-primary"></i>
                                  <div>
                                     <small class="text-muted">Kebutuhan Jurusan</small>
                                     <p class="mb-0">{{ $karir->jurusan->name }}</p>
                                  </div>
                               </div>
                         </div>
                         <div class="col-md-6">
                               <div class="meta-item">
                                  <i class="fas fa-user text-primary"></i>
                                  <div>
                                     <small class="text-muted">Maksimal Umur</small>
                                     <p class="mb-0">{{ $karir->batas_usia }} Tahun</p>
                                  </div>
                               </div>
                         </div>
                         <div class="col-md-6">
                               <div class="meta-item">
                                  <i class="fas fa-award text-primary"></i>
                                  <div>
                                     <small class="text-muted">Minimal IPK</small>
                                     <p class="mb-0">{{ number_format($karir->ipk, 2) }}</p>
                                  </div>
                               </div>
                         </div>
                      </div>
                   </div>
             </div>
          </div>
       </div>

       <div class="row mt-5">
        <div class="col-lg-8">
            <div class="recent-posts">
                <h3 class="mb-4">Form Lamaran</h3>
                <hr>
                <form class="row g-3" action="{{ route('karir.dashuser.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <input type="hidden" name="karir_id" value="{{ $karir->id }}">
                    <div class="col-md-12 mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-control @error('jurusan_id') is-invalid @enderror" id="jurusan" name="jurusan_id" required value="{{ old('jurusan_id') }}">
                            <option value="" disabled selected>Pilih Jurusan</option>
                            @foreach($jurusans as $data)
                             <option value="{{ $data->id }}" {{ (old('jurusan_id') ?? '') == $data->id ? 'selected' : '' }}>
                                   {{ $data->name }}
                             </option>
                          @endforeach
                       </select>
                        @error('jurusan_id')
                          <div class="invalid-feedback">
                             {{ $message }}
                          </div>
                        @enderror                        
                     </div>
                    <div class="col-md-12 mb-3">
                        <label for="ipk" class="form-label">IPK</label>
                        <input type="text" class="form-control" id="ipk" name="ipk" value="{{ old('ipk') }}" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir</label>
                        <select class="form-control @error('pendidikan_terakhir') is-invalid @enderror" id="pendidikan_terakhir" name="pendidikan_terakhir" required>
                            <option value="">Pilih Pendidikan Terakhir</option>
                            <option value="SMA/SMK" {{ old('pendidikan_terakhir') == 'SMA/SMK' ? 'selected' : '' }}>SMA/SMK</option>
                            <option value="D1" {{ old('pendidikan_terakhir') == 'D1' ? 'selected' : '' }}>D1</option>
                            <option value="D2" {{ old('pendidikan_terakhir') == 'D2' ? 'selected' : '' }}>D2</option>
                            <option value="D3" {{ old('pendidikan_terakhir') == 'D3' ? 'selected' : '' }}>D3</option>
                            <option value="S1" {{ old('pendidikan_terakhir') == 'S1' ? 'selected' : '' }}>S1</option>
                            <option value="S2" {{ old('pendidikan_terakhir') == 'S2' ? 'selected' : '' }}>S2</option>
                            <option value="S3" {{ old('pendidikan_terakhir') == 'S3' ? 'selected' : '' }}>S3</option>
                        </select>
                        @error('pendidikan_terakhir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="universitas" class="form-label">Asal Sekolah</label>
                        <input type="text" class="form-control" id="universitas" name="universitas" value="{{ old('universitas') }}" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="cv" class="form-label">Upload CV <span class="text-danger">*PDF</span></label>
                        <input type="file" class="form-control" id="cv" name="cv" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="pas_foto" class="form-label">Upload Pas Foto <span class="text-danger">*Image</span></label>
                        <input type="file" class="form-control" id="pas_foto" name="pas_foto" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="lamaran" class="form-label">Upload Surat Lamaran <span class="text-danger">*PDF</span></label>
                        <input type="file" class="form-control" id="lamaran" name="lamaran" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 w-100">Kirim Lamaran</button>
                </form>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="recent-posts">
                <h3>Karir Lainnya</h3>
                <hr>
                <div class="recent-post-list">
                      @if ($karirData->isEmpty())
                         <p class="text-center">Karir Belum Tersedia</p>
                      @else
                         @foreach ($karirData as $data)
                            <div class="recent-post-item">
                                  <div class="post-info">
                                     <h4 class="post-title">{{ $data->title }}</h4>
                                     <div class="post-meta">
                                        <span><i class="fa fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($data->tanggal_mulai)->format('d M Y') }} - {{ \Carbon\Carbon::parse($data->tanggal_berakhir)->format('d M Y') }}</span>
                                     </div>
                                     <a href="{{ route('karir.dashuser.detail', $data->slug) }}" class="read-more-btn">Selengkapnya</a>
                                  </div>
                            </div>
                         @endforeach
                      @endif
                </div>
             </div>
        </div>
       </div>
    </div>
 </div>

@endsection