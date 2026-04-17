<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Post;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        // Fetch 6 random active doctors for the home page teaser
        $doctors = Doctor::with('poliklinik')
            ->where('is_active', true)
            ->inRandomOrder()
            ->take(6)
            ->get();

        // Fetch latest 3 news/articles
        $articles = Post::published()->latest()->take(3)->get();

        // Static FAQs for now
        $faqs = [
            [
                'question' => 'Bagaimana cara mendaftar sebagai pasien baru di RS Dr. Sindhu Trisno?',
                'answer'   => 'Pendaftaran dapat dilakukan secara langsung di loket pendaftaran IGD / Rawat Jalan, atau secara online melalui Mobile JKN. Bawa kartu identitas (KTP/KK) dan kartu BPJS jika ada.',
            ],
            [
                'question' => 'Apakah RS Dr. Sindhu Trisno menerima pasien BPJS Kesehatan?',
                'answer'   => 'Ya, kami menerima pasien BPJS Kesehatan kelas 1, 2, dan 3. Pastikan membawa surat rujukan dari Faskes Tingkat Pertama kecuali untuk kasus gawat darurat.',
            ],
            [
                'question' => 'Berapa jam operasional Instalasi Gawat Darurat (IGD)?',
                'answer'   => 'IGD RS Dr. Sindhu Trisno beroperasi 24 jam sehari, 7 hari seminggu, termasuk hari libur nasional.',
            ],
            [
                'question' => 'Apa saja fasilitas unggulan yang tersedia?',
                'answer'   => 'Kami memiliki fasilitas unggulan meliputi: Laboratorium 24 jam, Radiologi, Farmasi, Kamar Operasi (OK), ICU/NICU, Fisioterapi, dan 16 poliklinik spesialis.',
            ],
        ];

        // Static Testimonials
        $testimonials = [
            [
                'name'    => 'Bapak Subarno',
                'city'    => 'Palu Timur',
                'rating'  => 5,
                'text'    => 'Pelayanan dokter spesialis jantung di sini sangat profesional dan penuh empati. Terima kasih RS Dr. Sindhu Trisno!',
                'initials'=> 'SB',
                'dark'    => true,
            ],
            [
                'name'    => 'Ibu Hartati Dahlan',
                'city'    => 'Donggala',
                'rating'  => 5,
                'text'    => 'Anak saya dirawat di poli anak dengan penuh kasih sayang. Fasilitasnya bersih dan nyaman.',
                'initials'=> 'HD',
                'dark'    => false,
            ],
        ];

        return view('landing', compact('doctors', 'faqs', 'testimonials', 'articles'));
    }
}
