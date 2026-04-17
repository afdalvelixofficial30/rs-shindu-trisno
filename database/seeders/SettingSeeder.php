<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // Identitas
            ['key' => 'site_name',        'value' => 'RS Tkt. III Dr. Sindhu Trisno',       'group' => 'Identitas'],
            ['key' => 'site_tagline',     'value' => 'Sehat Bersama, Bangga Melayani',       'group' => 'Identitas'],
            ['key' => 'site_description', 'value' => 'Rumah Sakit Militer yang melayani prajurit TNI dan keluarganya dengan penuh dedikasi.', 'group' => 'Identitas'],
            ['key' => 'address',          'value' => 'Jl. Gatot Subroto No.1, Palu, Sulawesi Tengah', 'group' => 'Identitas'],
            ['key' => 'logo',             'value' => '',                                     'group' => 'Identitas'],

            // Kontak
            ['key' => 'phone',            'value' => '(0451) 123456',                        'group' => 'Kontak'],
            ['key' => 'whatsapp',         'value' => '08123456789',                          'group' => 'Kontak'],
            ['key' => 'email',            'value' => 'info@rssindhu.id',                     'group' => 'Kontak'],
            ['key' => 'emergency_phone',  'value' => '(0451) 111',                           'group' => 'Kontak'],

            // Sosmed
            ['key' => 'facebook_url',     'value' => '',                                     'group' => 'Sosmed'],
            ['key' => 'instagram_url',    'value' => '',                                     'group' => 'Sosmed'],
            ['key' => 'youtube_url',      'value' => '',                                     'group' => 'Sosmed'],

            // Operasional
            ['key' => 'jam_poli',         'value' => 'Senin – Jumat: 08.00 – 13.00',         'group' => 'Operasional'],
            ['key' => 'jam_ugd',          'value' => '24 Jam',                               'group' => 'Operasional'],
            ['key' => 'jam_rawat_inap',   'value' => '24 Jam',                               'group' => 'Operasional'],
            ['key' => 'jam_mcu',          'value' => 'Senin – Jumat: 07.30 – 11.00',         'group' => 'Operasional'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(
                ['key' => $setting['key']],
                ['value' => $setting['value'], 'group' => $setting['group']]
            );
        }

        $this->command->info('✅ Data pengaturan default berhasil ditanam!');
    }
}
