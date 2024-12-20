<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jurusans = [
            // RUMPUN SAINTEK (SCIENCE & TECHNOLOGY)
            
            // Teknik/Engineering
            'Teknik Sipil',
            'Teknik Mesin',
            'Teknik Elektro',
            'Teknik Kimia',
            'Teknik Industri',
            'Teknik Informatika',
            'Teknik Lingkungan',
            'Teknik Arsitektur',
            'Teknik Perkapalan',
            'Teknik Penerbangan',
            'Teknik Geologi',
            'Teknik Pertambangan',
            'Teknik Metalurgi',
            'Teknik Geodesi',
            'Teknik Biomedis',
            'Teknik Sistem Komputer',
            'Teknik Telekomunikasi',
            'Teknik Material',
            'Teknik Nuklir',
            'Teknik Kelautan',
            'Teknik Perancangan Wilayah dan Kota',

            // Sains dan Matematika
            'Matematika',
            'Fisika',
            'Kimia',
            'Biologi',
            'Statistika',
            'Geofisika',
            'Astronomi',
            'Sains Aktuaria',
            'Sains Data',
            'Bioteknologi',
            'Mikrobiologi',
            'Biokimia',
            'Geologi',
            'Oseanografi',
            
            // Kesehatan
            'Kedokteran',
            'Kedokteran Gigi',
            'Kedokteran Hewan',
            'Farmasi',
            'Kesehatan Masyarakat',
            'Keperawatan',
            'Kebidanan',
            'Gizi',
            'Kedokteran Forensik',
            'Biomedis',
            'Fisioterapi',
            'Okupasi Terapi',
            'Radiologi',
            'Optometri',
            'Ilmu Kedokteran Jiwa',
            'Ilmu Kedokteran Anak',
            'Ilmu Kedokteran Bedah',
            'Ilmu Penyakit Dalam',
            'Ilmu Kedokteran Mata',
            'Ilmu Kedokteran THT',
            
            // Pertanian dan Peternakan
            'Agribisnis',
            'Agroteknologi',
            'Ilmu Tanah',
            'Budidaya Pertanian',
            'Proteksi Tanaman',
            'Teknologi Hasil Pertanian',
            'Peternakan',
            'Kehutanan',
            'Teknologi Pangan',
            'Agronomi',
            'Hortikultura',
            'Ilmu dan Teknologi Pakan',
            'Nutrisi dan Makanan Ternak',
            'Manajemen Hutan',
            
            // RUMPUN SOSHUM (SOCIAL & HUMANITIES)
            
            // Ekonomi & Bisnis
            'Akuntansi',
            'Manajemen',
            'Ekonomi',
            'Ekonomi Pembangunan',
            'Ekonomi Syariah',
            'Bisnis Digital',
            'Manajemen Keuangan',
            'Manajemen Pemasaran',
            'Manajemen SDM',
            'Manajemen Operasi',
            'Perpajakan',
            'Perbankan',
            'Asuransi',
            
            // Hukum & Politik
            'Ilmu Hukum',
            'Hukum Bisnis',
            'Hukum Internasional',
            'Hukum Pidana',
            'Hukum Perdata',
            'Hukum Tata Negara',
            'Hukum Islam',
            'Ilmu Politik',
            'Hubungan Internasional',
            'Administrasi Negara',
            'Administrasi Publik',
            'Kebijakan Publik',
            
            // Sosial & Humaniora
            'Sosiologi',
            'Antropologi',
            'Psikologi',
            'Ilmu Komunikasi',
            'Jurnalistik',
            'Public Relations',
            'Broadcasting',
            'Perpustakaan',
            'Kearsipan',
            'Kriminologi',
            'Ilmu Sejarah',
            'Arkeologi',
            'Filsafat',
            
            // Pendidikan
            'Pendidikan Guru SD',
            'Pendidikan Anak Usia Dini',
            'Pendidikan Bahasa Indonesia',
            'Pendidikan Bahasa Inggris',
            'Pendidikan Matematika',
            'Pendidikan Fisika',
            'Pendidikan Biologi',
            'Pendidikan Kimia',
            'Pendidikan IPS',
            'Pendidikan IPA',
            'Pendidikan Agama',
            'Pendidikan Seni',
            'Pendidikan Jasmani',
            'Teknologi Pendidikan',
            'Bimbingan Konseling',
            'Manajemen Pendidikan',
            'Evaluasi Pendidikan',
            'Kurikulum dan Teknologi Pendidikan',
            
            // Bahasa & Sastra
            'Sastra Indonesia',
            'Sastra Inggris',
            'Sastra Jepang',
            'Sastra China',
            'Sastra Arab',
            'Sastra Jerman',
            'Sastra Perancis',
            'Sastra Rusia',
            'Linguistik',
            'Penerjemahan',
            
            // Seni & Desain
            'Seni Rupa',
            'Desain Komunikasi Visual',
            'Desain Interior',
            'Desain Produk',
            'Seni Musik',
            'Seni Tari',
            'Seni Drama',
            'Fotografi',
            'Film dan Televisi',
            'Animasi',
            'Kriya Seni',
            
            // Agama & Filsafat
            'Ilmu Al-Quran dan Tafsir',
            'Ilmu Hadist',
            'Hukum Keluarga Islam',
            'Perbandingan Mazhab',
            'Filsafat Agama',
            'Tasawuf dan Psikoterapi',
            'Studi Agama-agama',
            
            // Program S2 & S3 Spesifik
            'Studi Pembangunan',
            'Kajian Budaya',
            'Kajian Gender',
            'Kajian Media',
            'Kajian Wilayah',
            'Manajemen Inovasi',
            'Kebijakan Energi',
            'Ilmu Pangan',
            'Bioinformatika',
            'Nanoteknologi',
            'Ilmu Kebencanaaan',
            'Ilmu Lingkungan',
            'Perubahan Iklim',
            'Energi Terbarukan',
            'Manajemen Proyek',
            'Manajemen Strategi',
            'Sistem Informasi Bisnis',
            'Teknologi Biomedis',
            'Rekayasa Transportasi',
            'Manajemen Logistik',
            'Manajemen Konstruksi',
            'Teknik Keselamatan',
            'Ergonomi',
            'Bioteknologi Medis',
            'Ilmu Biomedis',
            'Neurosains',
            'Farmakologi',
            'Toksikologi',
            'Imunologi',
            'Ilmu Kedokteran Tropis',
            'Parasitologi',
            'Mikrobiologi Medik',
            'Patologi',
            'Anatomi',
            'Fisiologi',
            'Histologi',
            'Ilmu Bedah',
            'Ilmu Penyakit Dalam',
            'Ilmu Kesehatan Anak',
            'Ilmu Kebidanan dan Kandungan',
            'Ilmu Penyakit Kulit dan Kelamin',
            'Ilmu Kedokteran Jiwa',
            'Ilmu Penyakit Jantung',
            'Ilmu Bedah Saraf',
            'Ilmu Penyakit Saraf',
            'Ilmu Bedah Ortopedi',
            'Ilmu Penyakit Mata',
            'Ilmu THT',
            'Radiologi',
            'Anestesiologi',
            'Pulmonologi',
            'Kardiologi',
            'Urologi',
            'Onkologi',
            'Bedah Plastik',
            'Bedah Anak',
            'Kedokteran Olahraga',
            'Kedokteran Penerbangan',
            'Kedokteran Laut',
            'Kedokteran Nuklir',
            'Kedokteran Forensik',
            'Rehabilitasi Medik'
        ];

        $data = [];
        foreach ($jurusans as $jurusan) {
            $data[] = [
                'name' => $jurusan,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('jurusans')->insert($data);
    }
}