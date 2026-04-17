<?php
$names = ['Radiologi', 'Patologi Klinik', 'IGD'];
foreach($names as $name) {
    if (!\App\Models\Poliklinik::where('name', $name)->exists()) {
        \App\Models\Poliklinik::create(['name' => $name, 'slug' => \Str::slug($name), 'description' => 'Layanan ' . $name, 'is_active' => true]);
    }
}
$radId = \App\Models\Poliklinik::where('name', 'Radiologi')->first()->id;
$patId = \App\Models\Poliklinik::where('name', 'Patologi Klinik')->first()->id;
$igdId = \App\Models\Poliklinik::where('name', 'IGD')->first()->id;

$newDoctors = [
    ['name' => 'dr. Haerani Harun, M.Kes, Sp.PK', 'specialty' => 'Dokter Spesialis Patologi Klinik', 'photo' => 'dr. Haerani Harun, M.Kes, Sp.PK (Dokter Spesialis Patologi Klinik).jpeg', 'schedule_text' => 'Senin - Jumat | On Call', 'poliklinik_id' => $patId, 'is_active' => true],
    ['name' => 'dr. Inddi Nursyafitri Hamsari', 'specialty' => 'Dokter Umum IGD', 'photo' => 'dr. Inddi Nursyafitri Hamsari (Dokter Umum IGD).jpeg', 'schedule_text' => 'Senin - Minggu | 24 Jam Shift', 'poliklinik_id' => $igdId, 'is_active' => true],
    ['name' => 'dr. Irani Nur Ramadhani, M.K.M', 'specialty' => 'Dokter Umum IGD', 'photo' => 'dr. Irani Nur Ramadhani, M.K.M (Dokter Umum IGD).jpeg', 'schedule_text' => 'Senin - Minggu | 24 Jam Shift', 'poliklinik_id' => $igdId, 'is_active' => true],
    ['name' => 'dr. Luh Gede Yustini Ekawati', 'specialty' => 'Dokter Umum IGD', 'photo' => 'dr. Luh Gede Yustini Ekawati (Dokter Umum IGD).jpeg', 'schedule_text' => 'Senin - Minggu | 24 Jam Shift', 'poliklinik_id' => $igdId, 'is_active' => true],
    ['name' => 'dr. Megawati', 'specialty' => 'Dokter Umum IGD', 'photo' => 'dr. Megawati (Dokter Umum IGD).jpeg', 'schedule_text' => 'Senin - Minggu | 24 Jam Shift', 'poliklinik_id' => $igdId, 'is_active' => true],
    ['name' => 'dr. Robert Mangiri, Sp.Rad', 'specialty' => 'Dokter Spesialis Radiologi', 'photo' => 'dr. Robert Mangiri, Sp.Rad (Dokter Spesialis Radiologi).jpeg', 'schedule_text' => 'Senin - Jumat | 08:00 - 14:00', 'poliklinik_id' => $radId, 'is_active' => true],
    ['name' => 'dr. Selvi Oktaviana Purba, Sp.Rad', 'specialty' => 'Dokter Spesialis Radiologi', 'photo' => 'dr. Selvi Oktaviana Purba, Sp.Rad (Dokter Spesialis Radiologi).jpeg', 'schedule_text' => 'Senin - Jumat | 08:00 - 14:00', 'poliklinik_id' => $radId, 'is_active' => true],
    ['name' => 'dr. Suci Annisa Kurnia', 'specialty' => 'Dokter Umum IGD', 'photo' => 'dr. Suci Annisa Kurnia (Dokter Umum IGD).jpeg', 'schedule_text' => 'Senin - Minggu | 24 Jam Shift', 'poliklinik_id' => $igdId, 'is_active' => true],
    ['name' => 'dr. Vebry Yanty', 'specialty' => 'Dokter Umum IGD', 'photo' => 'dr. Vebry Yanty (Dokter Umum IGD).jpeg', 'schedule_text' => 'Senin - Minggu | 24 Jam Shift', 'poliklinik_id' => $igdId, 'is_active' => true],
    ['name' => 'dr. Victor William Kalaena', 'specialty' => 'Dokter Umum IGD', 'photo' => 'dr. Victor William Kalaena (Dokter Umum IGD).jpeg', 'schedule_text' => 'Senin - Minggu | 24 Jam Shift', 'poliklinik_id' => $igdId, 'is_active' => true],
    ['name' => 'dr. Andrew', 'specialty' => 'Dokter Umum IGD', 'photo' => 'dr.Andrew (Dokter Umum IGD).jpeg', 'schedule_text' => 'Senin - Minggu | 24 Jam Shift', 'poliklinik_id' => $igdId, 'is_active' => true],
];

foreach($newDoctors as $doc) {
   \App\Models\Doctor::firstOrCreate(['name' => $doc['name']], $doc);
}
echo "Done importing\n";
