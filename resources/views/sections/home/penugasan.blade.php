<!-- Penugasan CTA Section -->
<section id="penugasan" class="relative pt-12 pb-24 md:pb-32 overflow-hidden bg-[#EBF3FA]">

    <!-- Background Penugasan Image -->
    <img 
        src="{{ asset('assets/images/background-penugasan.png') }}" 
        alt="Background Penugasan" 
        class="absolute inset-0 w-full h-full object-cover object-top pointer-events-none z-0" 
    />

    <div class="relative z-10 max-w-[1320px] mx-auto px-4 sm:px-6 lg:px-8 pt-16 sm:pt-24 md:pt-28">
        
        <!-- Top Badge Pill -->
        <div class="flex justify-center mb-6 md:mb-8">
            <div class="inline-flex items-center justify-center px-8 sm:px-10 py-2 sm:py-2.5 rounded-full bg-gradient-to-r from-[#003db8] via-[#0256DD] to-[#003db8] text-white font-extrabold text-sm sm:text-base shadow-[0_0_25px_rgba(2,86,221,0.85)] border border-blue-400/40 tracking-wide">
                Penugasan
            </div>
        </div>

        <!-- Main Headline -->
        <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-white text-center leading-tight tracking-tight mb-4 md:mb-6">
            Selesaikan,<br />
            Tumbuh, <span class="text-[#a5c9ff] bg-clip-text text-transparent bg-gradient-to-r from-[#b6d5ff] via-[#8bbaff] to-[#a5c9ff]">Berkontribusi</span>
        </h2>

        <!-- Subtitle -->
        <p class="text-blue-100/90 text-sm sm:text-base md:text-lg text-center max-w-2xl mx-auto font-medium leading-relaxed mb-10 md:mb-14">
            Lihat dan selesaikan penugasan yang diberikan.<br class="hidden sm:inline" />
            Tingkatkan kemampuan, berikan kontribusi terbaik untuk UKMFT-ITC
        </p>

        <!-- Stats Card & Button Container Wrapper -->
        <div class="max-w-3xl mx-auto">
            <!-- Glassmorphic Stats Card Container -->
            <div class="bg-[#0f2757]/60 backdrop-blur-xl rounded-[2.5rem] sm:rounded-full p-6 sm:p-8 md:px-12 md:py-8 border-2 border-[#3b82f6]/50 shadow-[0_0_40px_rgba(37,99,235,0.4)] flex flex-col sm:flex-row items-center justify-around gap-6 sm:gap-8 md:gap-12">
                
                <!-- Stat 1: Jumlah Penugasan -->
                <div class="flex items-center gap-4 md:gap-5 w-full sm:w-auto justify-center sm:justify-start">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-full bg-[#0a1e4a]/90 border-2 border-blue-400/40 flex items-center justify-center shrink-0 shadow-lg shadow-blue-900/50">
                        <svg class="w-7 h-7 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="5" y="4" width="14" height="16" rx="2" ry="2"></rect>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 9h6M9 13h6M9 17h4M9 4v2a1 1 0 001 1h4a1 1 0 001-1V4"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-white/90 font-bold text-sm sm:text-base md:text-lg leading-tight">
                            Jumlah Penugasan
                        </p>
                        <p class="text-white font-black text-2xl sm:text-3xl md:text-4xl mt-0.5">
                            {{ $totalPenugasan ?? 12 }}
                        </p>
                    </div>
                </div>

                <!-- Stat 2: Kategori penugasan -->
                <div class="flex items-center gap-4 md:gap-5 w-full sm:w-auto justify-center sm:justify-start">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-full bg-[#0a1e4a]/90 border-2 border-blue-400/40 flex items-center justify-center shrink-0 shadow-lg shadow-blue-900/50">
                        <svg class="w-7 h-7 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-white/90 font-bold text-sm sm:text-base md:text-lg leading-tight">
                            Kategori penugasan
                        </p>
                        <p class="text-white font-black text-2xl sm:text-3xl md:text-4xl mt-0.5">
                            {{ $totalKategori ?? 2 }}
                        </p>
                    </div>
                </div>

            </div>

            <!-- CTA Button ("Lihat Penugasan ->") aligned to the right side -->
            <div class="flex justify-end mt-5 sm:mt-6">
                <a href="{{ route('penugasan') }}" class="inline-flex items-center gap-3 bg-[#0256DD] hover:bg-[#0044b5] text-white px-7 sm:px-8 py-3 sm:py-3.5 rounded-full font-extrabold text-sm sm:text-base shadow-[0_0_25px_rgba(2,86,221,0.7)] hover:scale-105 transition-all duration-300 group">
                    <svg class="w-5 h-5 text-white shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Lihat Penugasan</span>
                    <svg class="w-5 h-5 text-white shrink-0 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Quote / Notice Block -->
        <div class="mt-14 sm:mt-16 md:mt-20 max-w-xl mx-auto flex items-center justify-center gap-4 sm:gap-6 text-center">
            <span class="text-[#38bdf8] font-serif text-3xl sm:text-4xl md:text-5xl font-bold select-none leading-none">“</span>
            <div>
                <h4 class="text-white font-bold text-base sm:text-lg mb-1 leading-snug">
                    Perhatikan dengan baik
                </h4>
                <p class="text-blue-100/90 text-xs sm:text-sm font-medium leading-relaxed">
                    Bawa atau kerjakan penugasan dengan penuh tanggung jawab
                </p>
            </div>
            <span class="text-[#38bdf8] font-serif text-3xl sm:text-4xl md:text-5xl font-bold select-none leading-none">”</span>
        </div>

    </div>

    <!-- Bottom Black Gradient Transition -->
    <div class="absolute bottom-0 inset-x-0 h-32 bg-gradient-to-b from-transparent via-black/60 to-black pointer-events-none z-10"></div>
</section>