@extends('dashboard-admin.layouts.main')

@section('container')
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title text-white mb-0">Detail Lamaran: {{ $lamaran->nomor_lamar }}</h4>
                        <span class="badge badge-light">Status : {{ ucfirst($lamaran->status) }}</span>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Applicant Information Section -->
                    <div class="section-title my-3">
                        <h5><i class="fas fa-user-circle mr-2"></i>Informasi Pelamar</h5>
                        <hr>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr>
                                    <th class="bg-light" width="40%">Nama Lengkap</th>
                                    <td>{{ $lamaran->user->name }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light">Posisi Dilamar</th>
                                    <td>{{ $lamaran->karir->title }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light">Tanggal Lamaran</th>
                                    <td>{{ \Carbon\Carbon::parse($lamaran->tanggal_lamar)->format('d F Y') }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <div class="text-center">
                                <img src="{{ asset('storage/' . $lamaran->pas_foto) }}" 
                                     alt="Pas Foto" 
                                     class="img-thumbnail"
                                     style="max-width: 200px; height: auto;">
                            </div>
                        </div>
                    </div>

                    <!-- Education Information Section -->
                    <div class="section-title my-3">
                        <h5><i class="fas fa-graduation-cap mr-2"></i>Informasi Pendidikan</h5>
                        <hr>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-12 table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th class="bg-light" width="25%">Pendidikan Terakhir</th>
                                    <td>{{ $lamaran->pendidikan_terakhir }}</td>
                                    <th class="bg-light" width="25%">IPK</th>
                                    <td>{{ $lamaran->ipk }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light">Jurusan</th>
                                    <td>{{ $lamaran->jurusan->name }}</td>
                                    <th class="bg-light">Institusi</th>
                                    <td>{{ $lamaran->universitas }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <!-- Documents Section -->
                    <div class="section-title my-3">
                        <h5><i class="fas fa-file-alt mr-2"></i>Dokumen Lamaran</h5>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="document-card p-3 border rounded mb-3">
                                <div class="d-flex align-items-center">
                                    <a href="{{ asset('storage/' . $lamaran->cv) }}" 
                                        target="_blank" 
                                        class="btn btn-sm">
                                        <i class="fas fa-file-pdf fa-2x text-danger mr-3"></i>
                                     </a>
                                     <h6 class="mb-1">Curriculum Vitae</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="document-card p-3 border rounded mb-3">
                                <div class="d-flex align-items-center">
                                    <a href="{{ asset('storage/' . $lamaran->lamaran) }}" 
                                        target="_blank" 
                                        class="btn btn-sm">
                                        <i class="fas fa-file-alt fa-2x text-info mr-5"></i>
                                     </a>
                                     <h6 class="mb-1">Surat Lamaran</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="card-action">
                        <a href="{{ route('lamaran') }}" class="btn btn-danger">Kembali</a>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    .section-title {
        color: #1a237e;
    }
    .document-card {
        transition: all 0.3s ease;
    }
    .document-card:hover {
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transform: translateY(-2px);
    }
    .table th {
        background-color: #f8f9fa;
    }
</style>
@endpush
@endsection