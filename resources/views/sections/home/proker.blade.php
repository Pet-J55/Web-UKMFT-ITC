<!-- Program Kerja Section -->
<section id="program-kerja" class="relative mt-28 pt-7 overflow-visible">

    <!-- Judul Melayang (Di luar overflow-hidden container agar tidak terpotong) -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 z-30">
        <h2 class="bg-gradient-to-r from-[#002054] to-[#0256DD] text-white font-extrabold text-2xl md:text-3xl px-12 py-3.5 rounded-full shadow-[0_10px_25px_rgba(0,32,84,0.35)] border-4 border-[#EBF3FA] whitespace-nowrap">
            Program Kerja
        </h2>
    </div>

    <!-- Container Melengkung Atas (Background tetap abu-abu) -->
    <div class="bg-[#EBF3FA] rounded-t-[40px] md:rounded-t-[50px] pt-16 pb-16 relative shadow-inner overflow-hidden">
        
        <div class="relative z-10">
            <!-- Tabs Navigasi Divisi -->
            <div class="max-w-[1320px] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-center mb-10 mt-4">
                    <div class="bg-white rounded-full p-2 shadow-[0_4px_16px_rgba(0,0,0,0.06)] inline-flex items-center gap-1 md:gap-2 overflow-x-auto max-w-full">
                        <!-- Tab Active -->
                        <button class="px-8 py-2.5 bg-gradient-to-r from-[#002054] to-[#0256DD] text-white font-black text-sm rounded-full shadow-md transition whitespace-nowrap">
                            LITBANG
                        </button>
                        <!-- Tab Inactive -->
                        <button class="px-6 py-2.5 bg-transparent text-slate-900 font-extrabold text-sm rounded-full hover:bg-slate-100 transition whitespace-nowrap">
                            HUMAS
                        </button>
                        <button class="px-6 py-2.5 bg-transparent text-slate-900 font-extrabold text-sm rounded-full hover:bg-slate-100 transition whitespace-nowrap">
                            P&amp;K
                        </button>
                        <button class="px-6 py-2.5 bg-transparent text-slate-900 font-extrabold text-sm rounded-full hover:bg-slate-100 transition whitespace-nowrap">
                            PSDM
                        </button>
                        <button class="px-6 py-2.5 bg-transparent text-slate-900 font-extrabold text-sm rounded-full hover:bg-slate-100 transition whitespace-nowrap">
                            INFOKOM
                        </button>
                    </div>
                </div>
            </div>

            <!-- Area Carousel dengan Gambar Background / Logo hanya pada Carousel -->
            <div class="relative w-full overflow-hidden">
                <!-- Background Image / Logo khusus pada Carousel -->
                <img 
                    src="{{ asset('assets/images/bacground-proker.png') }}" 
                    alt="Background Program Kerja Carousel" 
                    class="absolute inset-0 w-full h-full object-cover object-center pointer-events-none z-0" 
                />

                <!-- Horizontal Scroll Cards Container (Tampil sampai ke ujung kanan screen tanpa terpotong max-width) -->
                <div 
                    class="flex overflow-x-auto gap-6 pb-6 pt-4 pr-4 sm:pr-6 lg:pr-8 snap-x hide-scroll-bar w-full relative z-10"
                    style="padding-left: max(1.25rem, calc((100% - 1320px) / 2 + 2rem));"
                >
                    
                    @php
                        $cards = [
                            ['image' => 'assets/images/profile-1.png', 'title' => 'Workshop Web Development', 'desc' => 'Belajar Pengembangan web mulai dari dasarhingga pro', 'date' => '16 Juni 2026', 'loc' => 'RKBF 2004', 'quota' => '60 Peserta'],
                            ['image' => 'assets/images/profile-3.png', 'title' => 'Workshop Web Development', 'desc' => 'Belajar Pengembangan web mulai dari dasarhingga pro', 'date' => '16 Juni 2026', 'loc' => 'RKBF 2004', 'quota' => '60 Peserta'],
                            ['image' => 'assets/images/profile-2.png', 'title' => 'Workshop Web Development', 'desc' => 'Belajar Pengembangan web mulai dari dasarhingga pro', 'date' => '16 Juni 2026', 'loc' => 'RKBF 2004', 'quota' => '60 Peserta'],
                            ['image' => 'assets/images/profile-1.png', 'title' => 'Workshop Web Development', 'desc' => 'Belajar Pengembangan web mulai dari dasarhingga pro', 'date' => '16 Juni 2026', 'loc' => 'RKBF 2004', 'quota' => '60 Peserta'],
                            ['image' => 'assets/images/profile-3.png', 'title' => 'Workshop Web Development', 'desc' => 'Belajar Pengembangan web mulai dari dasarhingga pro', 'date' => '16 Juni 2026', 'loc' => 'RKBF 2004', 'quota' => '60 Peserta'],
                            ['image' => 'assets/images/profile-2.png', 'title' => 'Workshop Web Development', 'desc' => 'Belajar Pengembangan web mulai dari dasarhingga pro', 'date' => '16 Juni 2026', 'loc' => 'RKBF 2004', 'quota' => '60 Peserta'],
                        ];
                    @endphp

                    @foreach($cards as $card)
                    <div class="bg-white rounded-[22px] shadow-[0_10px_25px_rgba(0,0,0,0.07)] overflow-hidden min-w-[275px] w-[275px] flex-shrink-0 snap-start flex flex-col border border-slate-100 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl">
                        <!-- Image -->
                        <div class="h-44 w-full bg-slate-100 overflow-hidden">
                            <img src="{{ asset($card['image']) }}" alt="{{ $card['title'] }}" class="w-full h-full object-cover object-center" />
                        </div>
                        
                        <!-- Content -->
                        <div class="p-5 flex flex-col flex-grow">
                            <h3 class="text-[#0256DD] font-extrabold text-[19px] leading-snug mb-2">
                                {{ $card['title'] }}
                            </h3>
                            <p class="text-[13px] font-bold text-slate-900 mb-5 leading-tight">
                                {{ $card['desc'] }}
                            </p>
                            
                            <!-- Details -->
                            <div class="space-y-2.5 mb-6 text-[13px] font-bold text-slate-800">
                                <div class="flex items-center gap-2.5">
                                    <svg class="w-4 h-4 text-slate-600 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                        <line x1="16" y1="2" x2="16" y2="6"></line>
                                        <line x1="8" y1="2" x2="8" y2="6"></line>
                                        <line x1="3" y1="10" x2="21" y2="10"></line>
                                    </svg>
                                    {{ $card['date'] }}
                                </div>
                                <div class="flex items-center gap-2.5">
                                    <svg class="w-4 h-4 text-slate-600 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                    {{ $card['loc'] }}
                                </div>
                                <div class="flex items-center gap-2.5">
                                    <svg class="w-4 h-4 text-slate-600 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                    {{ $card['quota'] }}
                                </div>
                            </div>
                            
                            <!-- Button CTA -->
                            <div class="mt-auto">
                                <a href="#" class="inline-block bg-gradient-to-r from-[#002054] to-[#0256DD] text-white text-[13px] font-bold px-6 py-2.5 rounded-full shadow-sm hover:opacity-90 transition">
                                    Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>

            <!-- Tombol Lihat Semua -->
            <div class="max-w-[1320px] mx-auto px-4 sm:px-6 lg:px-8 mt-6">
                <div class="flex justify-center">
                    <a href="#" class="bg-gradient-to-r from-[#002054] to-[#0256DD] text-white px-9 py-3.5 rounded-full font-extrabold text-sm flex items-center gap-2.5 shadow-md hover:shadow-lg transition">
                        Lihat Semua Program 
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* CSS Tambahan buat nyembunyiin scrollbar tapi tetep bisa di-scroll */
.hide-scroll-bar {
    -ms-overflow-style: none;
    scrollbar-width: none;
}
.hide-scroll-bar::-webkit-scrollbar {
    display: none;
}
</style>