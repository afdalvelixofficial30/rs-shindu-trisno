<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Http\Kernel::class)->bootstrap();

use Illuminate\Support\Facades\Http;

$key = config('services.gemini.api_key');
echo "API Key: " . substr($key, 0, 15) . "...\n";

$response = Http::withHeaders(['X-goog-api-key' => $key])
    ->post('https://generativelanguage.googleapis.com/v1beta/models/gemini-flash-latest:generateContent', [
        'contents' => [
            ['role' => 'user', 'parts' => [['text' => 'Halo, perkenalkan dirimu dalam 1 kalimat singkat Bahasa Indonesia.']]]
        ]
    ]);

echo "Status: " . $response->status() . "\n";
if ($response->successful()) {
    echo "Reply: " . $response->json()['candidates'][0]['content']['parts'][0]['text'] . "\n";
} else {
    echo "Error: " . $response->body() . "\n";
}
