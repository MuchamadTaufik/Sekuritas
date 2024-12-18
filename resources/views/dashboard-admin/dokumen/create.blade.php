@extends('dashboard-admin.layouts.main')

@section('container')

   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <div class="card-title">Form Tambah Dokumen</div>
               </div>
               <div class="card-body">
                  <form action="{{ route('dokumen.store') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                    <label for="pdf">Dokumen</label>
                                    <input type="file" class="form-control @error('pdf') is-invalid @enderror" id="pdf" name="pdf" onchange="previewPDF()" required aria-describedby="pdfHelp"/>
                                    <small id="pdfHelp" class="form-text text-red">Maksimal ukuran file (4MB)</small>
                                    @error('pdf')
                                       <div class="invalid-feedback">
                                          {{ $message }}
                                       </div>
                                    @enderror
                                    <div class="mt-2">
                                        <iframe id="pdf-preview" style="display: none; width: 100%; height: 500px;" frameborder="0"></iframe>
                                    </div>
                              </div>
                           </div>                         
                           <div class="col-md-6">
                              <div class="form-group">
                                    <label for="title">Nama Dokumen</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Masukan Nama Dokumen..." value="{{ old('title') }}" required/>
                                    @error('title')
                                       <div class="invalid-feedback">
                                          {{ $message }}
                                       </div>
                                    @enderror
                              </div>
                           </div>
                        </div>
                        <div class="card-action">
                           <button type="submit" class="btn btn-success">Simpan</button>
                           <a href="{{ route('dokumen') }}" class="btn btn-danger">Kembali</a>
                        </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>

   <script>
    function previewPDF() {
        const fileInput = document.getElementById("pdf");
        const pdfPreview = document.getElementById("pdf-preview");
        const file = fileInput.files[0];

        if (file && file.type === "application/pdf") {
            const reader = new FileReader();

            reader.onload = function (e) {
                pdfPreview.src = e.target.result;
                pdfPreview.style.display = "block";
            };

            reader.readAsDataURL(file);
        } else {
            pdfPreview.style.display = "none";
        }
    }
   </script>

@endsection
