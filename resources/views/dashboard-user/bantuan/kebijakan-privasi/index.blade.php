@extends('dashboard-user.layouts.main')

@section('container')
   <div class="route mb-5">
      <div class="container-fluid">
         {{-- bg-route start --}}
         @include('dashboard-user.layouts.partials.bg-route-bantuan')
         {{-- bg-route-end --}}
         <div class="title-route">
            <p class="non-active"><a href="{{ route('/') }}"><i class="fas fa-arrow-left"></i> Kembali</a></p>
            <p>|</p>
            <p class="active">Kebijakan Privasi</p>
         </div>
      </div>
   </div>

   <div class="faq">
      <h2>Keamanan dan kerahasiaan atas setiap data dan informasi</h2>
      
      <div class="faq-item">
         <div class="faq-question">
            <span>Kebijakan Privasi</span>
            <svg class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
               <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
         </div>
         <div class="faq-answer">
            <p>Bjb Sekuritas selalu berupaya menjaga privasi maupun keamanan data pribadi nasabah maupun calon nasabahnya sehingga memenuhi ketentuan perundang-undangan yang berlaku. Halaman ini menginformasikan kepada anda mengenai kebijakan kami dalam hal pengumpulan, penggunaan, dan pengungkapan data pribadi saat mengggunakan layanan kami. Dengan menggunakan layanan kami, berarti anda menyetujui pengumpulan dan penggunaan data/informasi sesuai dengan Kebijakan Privasi ini.</p>
         </div>
      </div>

      <div class="faq-item">
         <div class="faq-question">
            <span>Pengumpulan dan penggunaan informasi</span>
            <svg class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
               <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
         </div>
         <div class="faq-answer">
            <p>Kami mengumpulkan beberapa jenis jenis informasi sesuai dengan kebutuhan kami guna peningkatan pelayanan kami kepada Anda, antara lain.</p>
            <ol>
               <li>Data Pribadi 
                  <p>Saat Anda menggunakan layanan kami, mungkin Anda juga diminta untuk memberikan kepada kami informasi pribadi tertentu yang dapat digunakan untuk menghubungi atau mengidentifikasi Anda termasuk tetapi tidak terbatas pada nama, tanggal lahir, KTP, NPWP,paspor atau nomor atau keterangan identifikasi lain, alamat, alamat email, nomor telepon, rincian kontak dan informasi keuangan, deskripsi dan foto pribadi, informasi portofolio produk dan layanan, profil resiko, latar belakang keuangan, latar belakang pendidikan dan data kependudukan.</p>
               </li>
               <li>Data Penggunaan 
                  <p>Saat anda menggunakan layanan kami, maka kami dapat mengumpulkan informasi tertentu secara otomatis, termasuk, tetapi tidak terbatas pada, jenis perangkat yang Anda gunakan. Setiap informasi dan data tersebut diatas dihasilkan dan/atau diberikan kepada kami selama Anda mengakses Sistem Elektronik dan melakukan aktivitas didalamnya. Contohnya, username terdaftar Anda, hasil pencarian dan sejarah untuk produk dan layanan yang tersedia, catatan transaksi, maupun jawaban Anda atas pertanyaan-pertanyaan yang ditujukan untuk verifikasi.</p>
               </li>
               <li>Pelacakan & Data Cookie
                  <p>Kami menggunakan cookie dan teknologi pelacakan serupa untuk melacak aktivitas di Layanan kami dan menyimpan informasi tertentu. cookie adalah file dengan sejumlah kecil data yang mungkin termasuk pengenal unik anonim. Cookie dikirim ke browser Anda dari situs web dan disimpan di perangkat Anda. Teknologi pelacakan yang juga digunakan adalah suar, tag, dan skrip untuk mengumpulkan dan melacak informasi serta untuk meningkatkan dan menganalisis Layanan kami. Untuk memberikan pemahaman sederhana kepada Anda mengenai Cookie, dibawah ini kami informasikan jenis-jenisnya seperti,Session Cookies, Preference Cookies, Security Cookies</p>
               </li>
            </ol>
         </div>
      </div>

      <div class="faq-item">
         <div class="faq-question">
            <span>Penggunaan Data</span>
            <svg class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
               <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
         </div>
         <div class="faq-answer">
            <p>Bjb Sekuritas menggunakan data yang telah dikumpulkan untuk berbagai macam kebutuhan, yaitu untuk:</p>
            <ol>
               <li>
                  Menyelenggarakan dan memelihara Sistem Elektronik
               </li>
               <li>
                  Memberitahukan Anda tentang perubahan didalam pelayanan kami
               </li>
               <li>
                  Memungkinkan Anda untuk berpartisipasi dalam fitur interaktif produk/jasa kami ketika Anda memilih untuk melakukannya
               </li>
               <li>
                  Memberikan pelayanan dan dukungan pelanggan
               </li>
               <li>
                  Memberikan analisis atau informasi berharga sehingga kami dapat meningkatkan Sistem Elektronik kami
               </li>
               <li>
                  Memantau penggunaan Sistem Elektronik
               </li>
               <li>
                  Mendeteksi, mencegah dan mengatasi masalah teknis
               </li>
            </ol>
         </div>
      </div>

      <div class="faq-item">
         <div class="faq-question">
            <span>Transfer Data</span>
            <svg class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
               <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
         </div>
         <div class="faq-answer">
            <p>Informasi Anda, termasuk data pribadi, dapat dikirimkan maupun disimpan di media pihak ketiga yang mungkin berlokasi diwilayah diluar Indonesia. Apabila Anda berada di luar Indonesia dan memilih untuk memberikan informasi kepada kami, harap diperhatikan jika kami dapat mentransfer informasi, termasuk data pribadi, ke wilayah dan memprosesnya di Indonesia.</p>
            <p>Persetujuan Anda terhadap Kebijakan Privasi ini, kami pahami sebagai persetujuan Anda terhadap pengiriman informasi atau transfer data tersebut.</p>
         </div>
      </div>

      <div class="faq-item">
         <div class="faq-question">
            <span>Pengungkapan Data</span>
            <svg class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
               <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
         </div>
         <div class="faq-answer">
            <p>Bjb Sekuritas dapat mengungkapkan Data Pribadi Anda dengan itikad baik bahwa tindakan tersebut diperlukan untuk:</p>
            <ol>
               <li>
                  Untuk mematuhi kewajiban hukum
               </li>
               <li>
                  Untuk melindungi dan mempertahankan hak atau properti PT bjb Sekuritas Jawa Barat
               </li>
               <li>
                  Untuk mencegah atau menyelidiki kemungkinan kesalahan sehubungan dengan Layanan
               </li>
               <li>
                  Untuk melindungi keamanan pribadi pengguna Layanan atau publik
               </li>
               <li>
                  Untuk melindungi dari tanggung jawab hukum
               </li>
            </ol>
         </div>
      </div>

      <div class="faq-item">
         <div class="faq-question">
            <span>Keamanan Data</span>
            <svg class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
               <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
         </div>
         <div class="faq-answer">
            <p>Keamanan data Anda adalah sangat penting bagi kami, namun harap dipahami apabila tidak ada satupun metode transmisi melalui Internet, atau metode penyimpanan elektronik yang dijamin 100% aman. Oleh karenanya walaupun kami telah berupaya semaksimal mungkin dengan cara-cara yang umumnya dilakukan secara komersial untuk melindungi Data Pribadi Anda, kami tidak dapat menjamin keamanannya secara mutlak.</p>
         </div>
      </div>

      <div class="faq-item">
         <div class="faq-question">
            <span>Penyedia Layanan</span>
            <svg class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
               <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
         </div>
         <div class="faq-answer">
            <p>Kami dapat mempekerjakan perusahaan pihak ketiga dan individu untuk memfasilitasi Layanan kami ("Penyedia Layanan"), untuk menyediakan Layanan atas nama kami, untuk melakukan layanan terkait Layanan atau untuk membantu kami dalam menganalisis bagaimana Layanan kami digunakan.  Oleh karenanya pihak ketiga ini dapat memiliki akses ke informasi/data Anda hanya dalam rangka menjalankan dan menyelesaikan pekerjaan untuk dan atas nama kami serta berkewajiban tidak akan mengungkapkan atau menggunakannya untuk tujuan lain apa pun.</p>
         </div>
      </div>

      <div class="faq-item">
         <div class="faq-question">
            <span>Tautan ke Situs Lain</span>
            <svg class="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
               <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
         </div>
         <div class="faq-answer">
            <p>Layanan kami mungkin dapat berisi tautan ke situs lain. Apabila Anda mengklik tautan pihak ketiga, berarti Anda akan diarahkan ke situs pihak ketiga dimaksud. Dalam hal ini kami sangat menyarankan Anda untuk mempelajari kebijakan privasi setiap situs yang Anda kunjungi. Harap dipahami, kami tidak bertanggung jawab dan memiliki kendali atas konten, kebijakan privasi, atau pengoperasian situs atau sistem elektronik pihak ketiga mana pun.</p>
         </div>
      </div>

   </div>

   {{-- partner start --}}
   @include('dashboard-user.layouts.partials.partner')
   {{-- partner end --}}

@endsection