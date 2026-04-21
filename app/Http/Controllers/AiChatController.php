<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\JsonResponse;

class AiChatController extends Controller
{
    /**
     * System prompt yang mendefinisikan "kepribadian" Ners Sindhu.
     * Pesan ini dikirimkan secara tersembunyi ke Gemini di setiap percakapan.
     */
    private function systemPrompt(): string
    {
        return "Kamu adalah Ners Sindhu, asisten virtual resmi dari Rumah Sakit Tkt. III Dr. Sindhu Trisno Palu, Sulawesi Tengah. Tugasmu adalah membantu pasien dan keluarga dengan ramah, sopan, dan profesional dalam Bahasa Indonesia.

Kamu bisa membantu untuk:
- Menjawab pertanyaan seputar jadwal dan poliklinik yang tersedia di RS Dr. Sindhu Trisno (Penyakit Dalam, Saraf, Gigi, OBGYN, Jantung, Bedah, THT, Ortopedi, Anak, Jiwa, Psikologi, Mata, Kulit & Kelamin, Rehab Medik, Paru)
- Memberikan edukasi kesehatan umum dan pertolongan pertama ringan
- Menjelaskan alur pendaftaran (BPJS/umum)
- Memberikan informasi kontak dan lokasi rumah sakit

ATURAN PENTING yang harus selalu dipatuhi:
1. DILARANG KERAS memberikan diagnosis penyakit yang pasti kepada pasien
2. DILARANG KERAS meresepkan atau menyarankan dosis obat tertentu
3. Jika ada gejala yang terdengar serius/darurat (seperti nyeri dada hebat, sesak napas berat, kehilangan kesadaran, perdarahan banyak), SELALU sarankan segera ke IGD RS Dr. Sindhu Trisno yang buka 24 jam
4. Selalu akhiri jawaban tentang gejala kesehatan dengan anjuran berkonsultasi langsung ke dokter
5. Jika pertanyaan di luar konteks kesehatan atau RS, dengan sopan arahkan kembali ke topik kesehatan

Informasi kontak darurat:
- IGD 24 Jam: (0451) 421-230
- Lokasi: Jl. Dr. Sindhu Trisno No.1, Palu, Sulawesi Tengah

Gunakan bahasa yang hangat, empatik, dan tidak terlalu formal. Boleh gunakan emoji secukupnya untuk membuat percakapan lebih ramah 😊.";
    }

    /**
     * Handle incoming AI chat request
     */
    public function chat(Request $request): JsonResponse
    {
        $request->validate([
            'message'   => 'required|string|max:500',
            'history'   => 'array|max:16',
        ]);

        $apiKey = config('services.gemini.api_key');

        if (!$apiKey || $apiKey === 'your-gemini-api-key-here') {
            return response()->json([
                'reply' => 'Layanan AI sementara tidak tersedia. Untuk bantuan langsung, silakan hubungi kami di IGD 24 Jam: **(0451) 421-230**.'
            ]);
        }

        // Build conversation history for Gemini
        $contents = [];

        // Add conversation history (max last 8 messages to save tokens)
        $history = array_slice($request->input('history', []), -8);
        foreach ($history as $msg) {
            if (!isset($msg['role'], $msg['content'])) continue;
            // Skip the very last user message (we'll add it fresh below)
            $contents[] = [
                'role'  => $msg['role'] === 'user' ? 'user' : 'model',
                'parts' => [['text' => $msg['content']]]
            ];
        }

        // Add system prompt as first user turn if no history
        if (empty($contents)) {
            $contents[] = [
                'role'  => 'user',
                'parts' => [['text' => $this->systemPrompt()]]
            ];
            $contents[] = [
                'role'  => 'model',
                'parts' => [['text' => 'Baik! Saya siap membantu Anda. Ada yang bisa saya bantu seputar kesehatan atau layanan RS Dr. Sindhu Trisno Palu? 😊']]
            ];
        }

        // Add current user message
        $contents[] = [
            'role'  => 'user',
            'parts' => [['text' => $request->input('message')]]
        ];

        try {
            $response = Http::timeout(45)
                ->withHeaders(['X-goog-api-key' => $apiKey])
                ->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-flash-latest:generateContent", [
                    'contents'         => $contents,
                    'generationConfig' => [
                        'temperature'     => 0.7,
                        'maxOutputTokens' => 4096,
                    ],
                    'safetySettings' => [
                        ['category' => 'HARM_CATEGORY_HARASSMENT',        'threshold' => 'BLOCK_MEDIUM_AND_ABOVE'],
                        ['category' => 'HARM_CATEGORY_HATE_SPEECH',       'threshold' => 'BLOCK_MEDIUM_AND_ABOVE'],
                        ['category' => 'HARM_CATEGORY_DANGEROUS_CONTENT', 'threshold' => 'BLOCK_ONLY_HIGH'],
                    ],
                ]);

            if ($response->failed()) {
                throw new \Exception('Gemini API error: ' . $response->status());
            }

            $data  = $response->json();
            $reply = $data['candidates'][0]['content']['parts'][0]['text']
                ?? 'Maaf, saya tidak dapat memproses pertanyaan tersebut. Silakan coba lagi.';

        } catch (\Exception $e) {
            \Log::error('Ners Sindhu AI Error: ' . $e->getMessage());
            $reply = 'Maaf, saya sedang mengalami gangguan. Untuk bantuan segera, hubungi IGD kami di **(0451) 421-230**.';
        }

        return response()->json(['reply' => $reply]);
    }
}
