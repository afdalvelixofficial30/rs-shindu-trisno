<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $doctors = [
            [
                'name'       => 'dr. Ahmad Fauzi, Sp.JP',
                'specialist' => 'Spesialis Jantung & Pembuluh Darah',
                'schedule'   => 'Senin, Rabu, Jumat',
                'available'  => true,
                'photo'      => null,
                'initials'   => 'AF',
            ],
            [
                'name'       => 'dr. Sari Dewi, Sp.A',
                'specialist' => 'Spesialis Anak (Pediatri)',
                'schedule'   => 'Selasa, Kamis, Sabtu',
                'available'  => true,
                'photo'      => null,
                'initials'   => 'SD',
            ],
            [
                'name'       => 'dr. Rudi Hartono, Sp.PD',
                'specialist' => 'Spesialis Penyakit Dalam',
                'schedule'   => 'Senin s/d Jumat',
                'available'  => true,
                'photo'      => null,
                'initials'   => 'RH',
            ],
            [
                'name'       => 'dr. Nurul Hikmah, Sp.OG',
                'specialist' => 'Spesialis Kebidanan & Kandungan',
                'schedule'   => 'Senin, Selasa, Kamis',
                'available'  => true,
                'photo'      => null,
                'initials'   => 'NH',
            ],
            [
                'name'       => 'dr. Budi Santoso, Sp.B',
                'specialist' => 'Spesialis Bedah Umum',
                'schedule'   => 'Rabu, Kamis, Sabtu',
                'available'  => false,
                'photo'      => null,
                'initials'   => 'BS',
            ],
            [
                'name'       => 'dr. Lina Kusuma, Sp.N',
                'specialist' => 'Spesialis Neurologi (Saraf)',
                'schedule'   => 'Selasa, Jumat',
                'available'  => true,
                'photo'      => null,
                'initials'   => 'LK',
            ],
        ];

        $faqs = [
            [
                'question' => 'Bagaimana cara mendaftar sebagai pasien baru di RS Dr. Sindhu Trisno?',
                'answer'   => 'Pendaftaran dapat dilakukan secara langsung di loket pendaftaran IGD / Rawat Jalan, atau secara online melalui website ini dengan menekan tombol "Daftar Sekarang". Bawa kartu identitas (KTP/KK) dan kartu BPJS jika ada.',
            ],
            [
                'question' => 'Apakah RS Dr. Sindhu Trisno menerima pasien BPJS Kesehatan?',
                'answer'   => 'Ya, kami menerima pasien BPJS Kesehatan kelas 1, 2, dan 3. Pastikan membawa surat rujukan dari Faskes Tingkat Pertama (Puskesmas/Klinik) kecuali untuk kasus gawat darurat yang langsung dilayani di IGD.',
            ],
            [
                'question' => 'Berapa jam operasional Instalasi Gawat Darurat (IGD)?',
                'answer'   => 'IGD RS Dr. Sindhu Trisno beroperasi 24 jam sehari, 7 hari seminggu, termasuk hari libur nasional. Tim dokter dan perawat kami siap melayani kondisi darurat Anda kapan saja.',
            ],
            [
                'question' => 'Apa saja fasilitas unggulan yang tersedia di RS Dr. Sindhu Trisno?',
                'answer'   => 'Kami memiliki fasilitas unggulan meliputi: Laboratorium Patologi Klinik 24 jam, Radiologi (Rontgen, USG, CT-Scan), Instalasi Farmasi, Kamar Operasi modern, ICU/ICCU, Fisioterapi, dan berbagai poliklinik spesialis.',
            ],
            [
                'question' => 'Bagaimana cara menghubungi RS Dr. Sindhu Trisno dalam keadaan darurat?',
                'answer'   => 'Dalam keadaan darurat, silakan hubungi nomor IGD kami di (0451) 421-XXX yang aktif 24 jam, atau langsung datang ke IGD di Jl. Dr. Sindhu Trisno, Palu, Sulawesi Tengah. Ambulans juga tersedia untuk kondisi tertentu.',
            ],
            [
                'question' => 'Apakah tersedia layanan rawat inap dan berapa kapasitas tempat tidurnya?',
                'answer'   => 'Ya, RS Dr. Sindhu Trisno memiliki layanan rawat inap dengan total kapasitas 150 tempat tidur yang terbagi dalam beberapa kelas (VIP, Kelas I, II, dan III) sesuai dengan kebutuhan dan ketersediaan.',
            ],
        ];

        $testimonials = [
            [
                'name'    => 'Bapak Subarno',
                'city'    => 'Palu Timur',
                'rating'  => 5,
                'text'    => 'Pelayanan dokter spesialis jantung di sini sangat profesional dan penuh empati. Prosedur kateterisasi berjalan lancar dan saya merasa sangat diperhatikan. Terima kasih RS Dr. Sindhu Trisno!',
                'initials'=> 'SB',
                'dark'    => true,
            ],
            [
                'name'    => 'Ibu Hartati Dahlan',
                'city'    => 'Donggala',
                'rating'  => 5,
                'text'    => 'Anak saya dirawat di poli anak dengan penuh kasih sayang. Para perawat sangat sabar dan ramah. Fasilitasnya bersih dan nyaman. Sangat merekomendasikan rumah sakit ini untuk keluarga Anda.',
                'initials'=> 'HD',
                'dark'    => false,
            ],
            [
                'name'    => 'Pak Rizal Maulana',
                'city'    => 'Palu Barat',
                'rating'  => 5,
                'text'    => 'Proses pendaftaran online sangat mudah dan cepat. Tidak perlu antri lama. Dokter spesialis dalamnya sangat kompeten dan memberikan penjelasan yang mudah dipahami. Highly recommended!',
                'initials'=> 'RM',
                'dark'    => true,
            ],
        ];

        return view('landing', compact('doctors', 'faqs', 'testimonials'));
    }
}
