{{-- ═══════════════════════════════════════════════════════════
     NERS SINDHU - AI Health Assistant Widget
     Floating chat bubble powered by Google Gemini API
     ═══════════════════════════════════════════════════════════ --}}

<style>
    [x-cloak] { display: none !important; }
</style>

<div id="ners-sindhu-widget"
     x-data="nersSindhu()"
     class="fixed bottom-6 right-6 z-50 flex flex-col items-end gap-3"
     @keydown.escape.window="open && closeChat()">

    {{-- ─── CHAT PANEL ─── --}}
    <div x-show="open" x-cloak
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-y-4 scale-95"
         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
         x-transition:leave-end="opacity-0 translate-y-4 scale-95"
         class="bg-white rounded-2xl shadow-2xl border border-emerald-100 overflow-hidden flex flex-col origin-bottom-right"
         style="width: calc(100vw - 3rem); max-width: 380px; max-height: 550px; height: 80vh;">

        {{-- Header --}}
        <div class="px-4 py-3 flex items-center gap-3 shrink-0" style="background: linear-gradient(135deg, #064e3b, #059669); color: white;">
            <div class="relative shrink-0">
                <img src="{{ asset('assets/images/ners_avatar.png') }}" alt="Ners Sindhu" class="w-10 h-10 rounded-full object-cover bg-white shadow-sm border border-emerald-500">
                <span class="absolute bottom-0 right-0 w-3 h-3 border-2 border-white rounded-full" style="background-color: #22c55e;"></span>
            </div>
            <div class="flex-grow">
                <p class="text-sm font-bold text-white leading-tight">Ners Sindhu</p>
                <p class="text-[10px] text-emerald-200/80 leading-tight">Asisten Kesehatan · RS Dr. Sindhu Trisno</p>
            </div>
            <style>
                .close-ai-btn:hover {
                    background-color: #f43f5e !important; /* rose-500 */
                }
            </style>
            <button @click="closeChat()"
                    class="w-7 h-7 rounded-full bg-white/20 flex items-center justify-center text-white transition-all shrink-0 cursor-pointer close-ai-btn">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        {{-- Message area --}}
        <div id="chat-messages"
             x-ref="messages"
             class="flex-grow overflow-y-auto px-4 py-4 space-y-4 bg-gray-50/50"
             style="min-height: 250px;">

            {{-- Welcome message --}}
            <template x-if="messages.length === 0">
                <div class="flex flex-col items-center text-center py-4 gap-3">
                    <img src="{{ asset('assets/images/ners_avatar.png') }}" alt="Avatar" class="w-16 h-16 rounded-full object-cover shadow-md border-[3px] border-white">
                    <div>
                        <p class="text-sm font-bold text-gray-800">Halo! Saya <span class="text-emerald-700">Ners Sindhu</span> 👋</p>
                        <p class="text-xs text-gray-500 mt-1 leading-relaxed">Asisten kesehatan virtual RS Dr. Sindhu Trisno Palu. Saya siap membantu Anda dengan informasi kesehatan.</p>
                    </div>

                    {{-- Quick action pills --}}
                    <div class="flex flex-wrap justify-center gap-2 mt-1">
                        <template x-for="q in quickActions" :key="q.text">
                            <button @click="sendQuickAction(q.text)"
                                    class="flex items-center gap-1.5 bg-white border border-emerald-100 hover:border-emerald-400 hover:bg-emerald-50 rounded-full px-3 py-1.5 text-[11px] font-semibold text-emerald-700 transition-all shadow-sm">
                                <span x-text="q.icon"></span>
                                <span x-text="q.text"></span>
                            </button>
                        </template>
                    </div>
                </div>
            </template>

            {{-- Chat messages loop --}}
            <template x-for="(msg, idx) in messages" :key="idx">
                <div :class="msg.role === 'user' ? 'flex justify-end' : 'flex justify-start'" class="gap-2">
                    {{-- AI avatar --}}
                    <template x-if="msg.role === 'assistant'">
                        <img src="{{ asset('assets/images/ners_avatar.png') }}" class="w-7 h-7 rounded-full object-cover shadow-sm shrink-0 border border-emerald-100 mt-1" alt="AI">
                    </template>

                    <div :class="msg.role === 'user'
                                    ? 'bg-emerald-600 text-white rounded-2xl rounded-tr-sm'
                                    : 'bg-white border border-gray-100 text-gray-700 rounded-2xl rounded-tl-sm shadow-sm'"
                         class="max-w-[78%] px-3.5 py-2.5 text-xs leading-relaxed">
                        <div x-html="formatMessage(msg.content)"></div>
                    </div>
                </div>
            </template>

            {{-- Typing indicator --}}
            <div x-show="loading" class="flex justify-start gap-2">
                <img src="{{ asset('assets/images/ners_avatar.png') }}" class="w-7 h-7 rounded-full object-cover shadow-sm shrink-0 border border-emerald-100 mt-1" alt="AI">
                <div class="bg-white border border-gray-100 rounded-2xl rounded-tl-sm px-4 py-3 shadow-sm flex items-center gap-1">
                    <span class="w-1.5 h-1.5 bg-emerald-400 rounded-full animate-bounce" style="animation-delay: 0ms"></span>
                    <span class="w-1.5 h-1.5 bg-emerald-400 rounded-full animate-bounce" style="animation-delay: 150ms"></span>
                    <span class="w-1.5 h-1.5 bg-emerald-400 rounded-full animate-bounce" style="animation-delay: 300ms"></span>
                </div>
            </div>
        </div>

        {{-- Disclaimer --}}
        <div class="px-4 py-1.5 bg-amber-50 border-t border-amber-100 shrink-0">
            <p class="text-[9px] text-amber-700 text-center leading-snug">
                ⚠️ Informasi AI bukan pengganti diagnosis dokter. Untuk kondisi darurat, segera hubungi IGD 24 Jam.
            </p>
        </div>

        {{-- Input area --}}
        <div class="px-3 py-3 bg-white border-t border-gray-100 shrink-0">
            <form @submit.prevent="sendMessage()" class="flex gap-2">
                <input x-model="input"
                       x-ref="chatInput"
                       type="text"
                       placeholder="Tulis pertanyaan Anda…"
                       :disabled="loading"
                       maxlength="500"
                       class="flex-grow text-xs bg-gray-50 border border-gray-200 rounded-xl px-3.5 py-2.5 focus:outline-none focus:ring-2 focus:ring-emerald-500/30 focus:border-emerald-400 placeholder-gray-400 disabled:opacity-60 transition-all"/>
                <button type="submit"
                        :disabled="loading || input.trim() === ''"
                        class="w-9 h-9 shrink-0 bg-emerald-600 hover:bg-emerald-700 disabled:opacity-40 disabled:cursor-not-allowed rounded-xl flex items-center justify-center text-white transition-all">
                        <svg class="w-4 h-4" style="transform: rotate(90deg);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>

    {{-- ─── FLOATING TOGGLE BUTTON ─── --}}
    <div class="relative group flex items-center justify-end">
        {{-- Hover Hint --}}
        <div x-show="!open" 
             class="absolute text-[11px] font-bold py-1.5 px-3 rounded-full shadow-lg opacity-0 pointer-events-none transition-all duration-300 group-hover:opacity-100 whitespace-nowrap"
             style="right: 4.5rem; background-color: #1f2937; color: #ffffff;">
            Tanya Ners Sindhu (AI)
            <!-- Right pointing triangle for tooltip -->
            <div class="absolute top-1/2 -right-1 -translate-y-1/2 border-4 border-transparent" style="border-left-color: #1f2937;"></div>
        </div>


        {{-- Unread badge (new) --}}
        <span x-show="!open && unread > 0"
              class="absolute -top-1 -right-1 w-5 h-5 bg-red-500 text-white text-[9px] font-black rounded-full flex items-center justify-center z-10 shadow"
              x-text="unread"></span>

        <button @click="toggleChat()"
                :class="open ? 'bg-gray-700 hover:bg-gray-800' : 'bg-emerald-600 hover:bg-emerald-700'"
                class="relative w-14 h-14 rounded-full text-white shadow-xl flex items-center justify-center transition-all duration-300 hover:scale-105 active:scale-95">

            {{-- Chat icon --}}
            <svg x-show="!open"
                 x-transition:enter="transition duration-200" x-transition:enter-start="opacity-0 rotate-45" x-transition:enter-end="opacity-100 rotate-0"
                 class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
            </svg>

            {{-- Close icon --}}
            <svg x-show="open"
                 x-transition:enter="transition duration-200" x-transition:enter-start="opacity-0 -rotate-45" x-transition:enter-end="opacity-100 rotate-0"
                 class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>
</div>

{{-- ─── ALPINE.JS COMPONENT LOGIC ─── --}}
<script>
function nersSindhu() {
    return {
        open: false,
        loading: false,
        input: '',
        messages: [],
        unread: 1, // Show 1 badge on first load to attract attention
        quickActions: [
            { icon: '🗓️', text: 'Jadwal Poliklinik' },
            { icon: '💊', text: 'Cara daftar BPJS' },
            { icon: '🤒', text: 'Pertolongan pertama demam' },
            { icon: '📞', text: 'Kontak IGD' },
        ],

        toggleChat() {
            this.open = !this.open;
            if (this.open) {
                this.unread = 0;
                this.$nextTick(() => {
                    this.$refs.chatInput?.focus();
                });
            }
        },

        closeChat() {
            this.open = false;
        },

        scrollToBottom() {
            this.$nextTick(() => {
                const el = this.$refs.messages;
                if (el) el.scrollTop = el.scrollHeight;
            });
        },

        sendQuickAction(text) {
            this.input = text;
            this.sendMessage();
        },

        async sendMessage() {
            const text = this.input.trim();
            if (!text || this.loading) return;

            this.messages.push({ role: 'user', content: text });
            this.input = '';
            this.loading = true;
            this.scrollToBottom();

            try {
                const response = await fetch('/api/ai-chat', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
                    },
                    body: JSON.stringify({ message: text, history: this.messages.slice(-8) })
                });

                if (!response.ok) throw new Error('Server error');

                const data = await response.json();
                this.messages.push({ role: 'assistant', content: data.reply });
            } catch (err) {
                this.messages.push({
                    role: 'assistant',
                    content: 'Maaf, saya sedang mengalami gangguan koneksi. Silakan coba lagi sesaat lagi atau hubungi IGD kami di <strong>(0451) 421-230</strong>.'
                });
            } finally {
                this.loading = false;
                this.scrollToBottom();
            }
        },

        formatMessage(text) {
            // 1. Escape HTML so < / > characters (like <nama klinik>) are not hidden by browser
            const p = document.createElement('p');
            p.textContent = text;
            text = p.innerHTML;

            // 2. Convert simple markdown-like formatting to HTML
            return text
                .replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>')
                .replace(/\*(.*?)\*/g, '<em>$1</em>')
                .replace(/\n/g, '<br>');
        }
    }
}
</script>
