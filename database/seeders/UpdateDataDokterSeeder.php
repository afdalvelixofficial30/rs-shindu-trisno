<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use App\Models\Doctor;
use App\Models\Poliklinik;

class UpdateDataDokterSeeder extends Seeder
{
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Poliklinik::truncate();
        Doctor::truncate();
        Schema::enableForeignKeyConstraints();

        $polikliniksData = [
            'Penyakit Dalam' => [
                ['name' => 'dr. Arfan Sanusi, Sp.PD, FINASIM', 'sp' => 'Spesialis Penyakit Dalam', 'photo' => 'dr. Arfan Sanusi, Sp.PD (Dokter Spesialis Penyakit Dalam).jpeg', 'schedule' => 'Senin & Selasa | 13.00 - Selesai'],
                ['name' => 'dr. Winarti Arifudin, Sp.PD, FINASIM', 'sp' => 'Spesialis Penyakit Dalam', 'photo' => '', 'schedule' => 'Rabu - Jumat | 14.00 - Selesai']
            ],
            'Syaraf' => [
                ['name' => 'dr. Ruslan Ramli Sp. N', 'sp' => 'Spesialis Saraf (Neurologi)', 'photo' => 'dr. Ruslan Ramli Sp. N (Dokter Spesialis Neurologi).jpeg', 'schedule' => 'Senin | 12.00 - Selesai'],
                ['name' => 'dr. Marina Musyawwirina Sp.N', 'sp' => 'Spesialis Saraf (Neurologi)', 'photo' => 'dr. Marina Musyawwirina Sp.N (Dokter Spesialis Saraf).jpeg', 'schedule' => 'Selasa & Kamis | 13.00 - Selesai'],
                ['name' => 'dr. Magdalena, Sp.N', 'sp' => 'Spesialis Saraf (Neurologi)', 'photo' => 'dr. Magdelena, Sp. N (Dokter Spesialis Syaraf).jpeg', 'schedule' => 'Rabu & Jum\'at | 13.00 - Selesai']
            ],
            'Gigi Periodonti' => [
                ['name' => 'drg. Gustivanny Dwipa, Sp. Perio', 'sp' => 'Spesialis Gigi Periodonti', 'photo' => 'drg. Gustivanny Dwipa, Sp.Perio (Dokter Spesialis Gigi Periodonti).jpeg', 'schedule' => 'Senin - Jumat | 12.10 - Selesai']
            ],
            'Gigi' => [
                ['name' => 'drg. Hermawan', 'sp' => 'Dokter Gigi Umum', 'photo' => 'drg. Hermawan (Dokter Gigi).jpeg', 'schedule' => 'Senin - Jumat | 11.00 - Selesai'],
                ['name' => 'drg. Jeiska Triska Tulangow', 'sp' => 'Dokter Gigi Umum', 'photo' => 'drg. Jeiska Triska Tulangow (Dokter Gigi).jpeg', 'schedule' => 'Senin - Jumat | 11.00 - Selesai']
            ],
            'OBGYN' => [
                ['name' => 'Dr. dr. Abdul Faris, Sp.OG (K)', 'sp' => 'Spesialis Kandungan (Konsultan)', 'photo' => '', 'schedule' => 'Senin, Selasa & Kamis | 11.00 - Selesai'],
                ['name' => 'Dr. dr. Amirudin Rauf, Sp.OG, M.Si', 'sp' => 'Spesialis Kandungan (Obgyn)', 'photo' => 'Dr.dr. Amirudin Rauf, Sp.OG, M.Si (Dokter Spesialis Obgyn).jpeg', 'schedule' => 'Rabu - Jumat | 08.00 - Selesai'],
                ['name' => 'dr. Syahrir, Sp. OG', 'sp' => 'Spesialis Kandungan (Obgyn)', 'photo' => 'dr. Syahrir Abdurrasyid, Sp.OG (Dokter Spesialis Obgyn).jpeg', 'schedule' => 'Senin | 08.00 - Selesai']
            ],
            'Jantung' => [
                ['name' => 'dr. Katrin Sumekar, Sp.PD-KKV', 'sp' => 'Spesialis Kardiovaskular', 'photo' => 'dr.Katrin Sumekar,Sp.PD-KKV (Dokter Spesialis Kardiovaskular).jpeg', 'schedule' => 'Senin & Kamis | 11.00 - 14.00'],
                ['name' => 'dr. Mardhiyah Yamani, Sp. JP', 'sp' => 'Spesialis Jantung & Pembuluh Darah', 'photo' => 'dr. Mardhiyah Yamani, Sp. JP.jpeg', 'schedule' => 'Senin - Jumat | 15.00 - Selesai']
            ],
            'Bedah' => [
                ['name' => 'dr. Made Wirka, Sp.B', 'sp' => 'Spesialis Bedah Umum', 'photo' => 'dr. Made Wirka, Sp. B (Dokter Spesiali Bedah Umum).jpeg', 'schedule' => 'Senin, Selasa & Kamis | 13.00 - Selesai'],
                ['name' => 'dr. Arif Husain, Sp.B', 'sp' => 'Spesialis Bedah Umum', 'photo' => 'dr. Arief Husain, Sp.B (Dokter Spesialis Bedah Umum).jpeg', 'schedule' => 'Rabu - Jumat | 14.00 - Selesai']
            ],
            'THT' => [
                ['name' => 'dr. Bastiana, M.Kes., Sp.THTBKL', 'sp' => 'Spesialis THT-KL', 'photo' => 'dr. Bastiana, M.Kes., Sp.THTBKL (Dokter Spessialis THT).jpeg', 'schedule' => 'Senin, Rabu & Jumat | 11.00 - Selesai']
            ],
            'Ortopedi' => [
                ['name' => 'dr. Sri Sikspiriani C.H, Sp. OT', 'sp' => 'Spesialis Orthopedi', 'photo' => 'dr. Sri Sikspiriani C.H, Sp. OT (Dokter Spesialis Orthopedi).jpeg', 'schedule' => 'Senin, Rabu & Jumat | 11.00 - Selesai']
            ],
            'Anak' => [
                ['name' => 'dr. Kartin Akune, Sp.A', 'sp' => 'Spesialis Anak', 'photo' => 'dr. Kartin Akune, Sp. A (Dokter Spesialis Anak).jpeg', 'schedule' => 'Senin - Jumat | 08.00 - Selesai']
            ],
            'Jiwa' => [
                ['name' => 'dr. Banu Kadgada Kalingga Murda, Sp.KJ', 'sp' => 'Spesialis Kedokteran Jiwa', 'photo' => 'dr. Banu Kadgada Kalingga Murda Sp.KJ  (Dokter Spesialis Jiwa).jpeg', 'schedule' => 'Selasa & Kamis | 13.00 - 15.00']
            ],
            'Psikologi' => [
                ['name' => 'Octaviani Evelyn Balebu, M.Psi.psikolog', 'sp' => 'Psikolog Klinis', 'photo' => '', 'schedule' => "Senin s/d Kamis 12.00 - 15.00, Jum'at 13.00 - 15.00"]
            ],
            'Mata' => [
                ['name' => 'dr. Ni Luh Ayu Darmayanti, Sp.M', 'sp' => 'Spesialis Mata', 'photo' => 'dr. Ni Luh Ayu Darmayanti, Sp.M.jpeg', 'schedule' => 'Senin - Jumat | 15.00 - Selesai']
            ],
            'Kulit & Kelamin' => [
                ['name' => 'dr. Zakiani S, Sp. KK, M.Kes', 'sp' => 'Spesialis Kulit & Kelamin', 'photo' => 'dr.Zakiani Sakka,M.Kes,SpDVE (Dokter Kulit dan Kelamin).jpeg', 'schedule' => 'Senin - Jumat | 13.00 - Selesai']
            ],
            'Rehab Medik' => [
                ['name' => 'dr. Hermilawaty, Sp. KFR, FIPM (USG), AIFO-K', 'sp' => 'Spesialis Rehab Medik', 'photo' => 'dr. Hermilawaty, Sp. KFR, FIPM (USG), AIFO-K (Dokter Spesialis Rehab Medik).jpeg', 'schedule' => 'Senin - Kamis | 09.00 - Selesai']
            ],
            'Paru' => [
                ['name' => 'dr. Rivani Nurul Suci, Sp. P', 'sp' => 'Spesialis Paru', 'photo' => 'dr. Rivani Nurul Suci, Sp. P (Dokter Spesialis Paru).jpeg', 'schedule' => 'Senin - Jumat | 16.20 - Selesai']
            ]
        ];

        foreach ($polikliniksData as $poliName => $doctors) {
            $poli = Poliklinik::create([
                'name' => $poliName,
                'slug' => Str::slug($poliName),
                'description' => 'Layanan unggulan Poliklinik ' . $poliName . ' dengan peralatan medis terkini.',
                'is_active' => true,
            ]);

            foreach ($doctors as $doc) {
                Doctor::create([
                    'poliklinik_id' => $poli->id,
                    'name' => $doc['name'],
                    'specialty' => $doc['sp'],
                    'photo' => $doc['photo'], // real filename map
                    'schedule_text' => $doc['schedule'],
                    'is_active' => true,
                ]);
            }
        }
    }
}
