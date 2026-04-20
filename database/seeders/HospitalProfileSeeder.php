<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HospitalProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\HospitalProfile::create([
            'karumkit_name' => 'Dr.dr. Marles Edy Wanto Haloho, M.Kes',
            'karumkit_rank' => 'Letnan Kolonel Ckm',
            'karumkit_photo' => 'assets/images/karumkit.png',
            'welcome_message' => 'Rumah Sakit Tentara (RS Tkt. III 13.06.01) Dr. Sindhu Trisno Palu merupakan institusi kesehatan militer di bawah naungan Kodam XXIII Palaka Wira. Kami berdedikasi kuat untuk memberikan pelayanan medis yang prima, akurat, dan terarah bagi Prajurit TNI AD, PNS, Keluarga, serta Masyarakat Umum di wilayah Provinsi Sulawesi Tengah.',
            'visi' => 'Menjadi Rumah Sakit Unggulan bagi Prajurit TNI AD, PNS, dan Keluarga serta masyarakat umum di wilayah Provinsi Sulawesi Tengah.',
            'misi' => [
                'Memberikan pelayanan kesehatan yang prima.',
                'Memberikan pelayanan keparipurnaan yang dilandasi Profesionalisme, Disiplin, Bermoral, dan Soliditas.',
                'Meningkatkan SDM yang handal, dan memiliki budaya organisasi sebagai pelayan prima.',
                'Mengelola seluruh sumber daya secara efektif, efisien, dan akuntabel.'
            ],
            'motto' => ['Profesional', 'Akurat', 'Selaras', 'Terarah', 'Ikhlas'],
            'hospital_type' => 'TIPE C',
            'accreditation' => 'UTAMA',
            'certification' => 'BSrE',
            'organization_chart' => 'assets/images/bagan.png'
        ]);
    }
}
