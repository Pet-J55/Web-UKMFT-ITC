<!-- Divisi Section -->
<section id="divisi" class="relative py-16 overflow-hidden bg-[#EBF3FA]">

    <!-- Background Divisi Section -->
    <img 
        src="{{ asset('assets/images/backround-divisi.png') }}" 
        alt="Background Divisi" 
        class="absolute inset-0 w-full h-full object-cover object-center pointer-events-none z-0 opacity-75" 
    />

    <div class="relative z-10 max-w-[1320px] mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Title Badge -->
        <div class="mb-10 flex items-center justify-between">
            <div class="inline-flex items-center justify-center rounded-full bg-gradient-to-r from-[#002054] to-[#0256DD] px-8 sm:px-10 py-2.5 sm:py-3 text-xl sm:text-3xl font-extrabold text-white shadow-[0_10px_22px_rgba(0,32,84,0.28)]">
                Divisi
            </div>
            
            <a href="{{ route('divisi') }}" class="hidden sm:inline-flex items-center gap-2 text-[#0256DD] font-bold text-sm hover:underline">
                Lihat Semua Divisi
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
        </div>

        @php
            $data_divisi = $data_divisi ?? $divisiList ?? [
                [
                    'nama' => 'LITBANG',
                    'deskripsi' => 'Berfokus pada pengembangan software aplikasi, riset teknologi, dan inovasi digital untuk memberikan solusi teknologi yang berdampak nyata.',
                    'icon' => '</>',
                    'ketua' => [
                        'nama' => 'SAFRI SAFRU',
                        'jabatan' => 'Ketua Divisi',
                        'foto' => 'profile-1.png'
                    ],
                    'anggota' => [
                        ['nama' => 'SAFRA', 'jabatan' => 'Kadiv', 'foto' => 'profile-1.png'],
                        ['nama' => 'RINA', 'jabatan' => 'Sekdiv', 'foto' => 'profile-2.png'],
                        ['nama' => 'ANDI', 'jabatan' => 'Anggota', 'foto' => 'profile-3.png'],
                        ['nama' => 'BUDI', 'jabatan' => 'Anggota', 'foto' => 'profile-1.png'],
                        ['nama' => 'CITRA', 'jabatan' => 'Anggota', 'foto' => 'profile-2.png'],
                        ['nama' => 'DINI', 'jabatan' => 'Anggota', 'foto' => 'profile-3.png'],
                    ]
                ],
                [
                    'nama' => 'HUMAS',
                    'deskripsi' => 'Membangun dan memelihara hubungan relasi internal maupun eksternal dengan pihak kampus, alumni, serta mitra kerja sama.',
                    'icon' => '📢',
                    'ketua' => [
                        'nama' => 'AHMAD FAUZI',
                        'jabatan' => 'Ketua Divisi',
                        'foto' => 'profile-2.png'
                    ],
                    'anggota' => [
                        ['nama' => 'AHMAD', 'jabatan' => 'Kadiv', 'foto' => 'profile-2.png'],
                        ['nama' => 'BELLA', 'jabatan' => 'Sekdiv', 'foto' => 'profile-3.png'],
                        ['nama' => 'CHANDRA', 'jabatan' => 'Anggota', 'foto' => 'profile-1.png'],
                        ['nama' => 'DENI', 'jabatan' => 'Anggota', 'foto' => 'profile-2.png'],
                        ['nama' => 'EKA', 'jabatan' => 'Anggota', 'foto' => 'profile-3.png'],
                    ]
                ],
                [
                    'nama' => 'P&K',
                    'deskripsi' => 'Menyelenggarakan kegiatan pendidikan, pelatihan teknis IT, serta memfasilitasi pembuatan karya teknologi berkualitas bagi seluruh anggota.',
                    'icon' => '📚',
                    'ketua' => [
                        'nama' => 'DANI SETIAWAN',
                        'jabatan' => 'Ketua Divisi',
                        'foto' => 'profile-3.png'
                    ],
                    'anggota' => [
                        ['nama' => 'DANI', 'jabatan' => 'Kadiv', 'foto' => 'profile-3.png'],
                        ['nama' => 'ERNA', 'jabatan' => 'Sekdiv', 'foto' => 'profile-1.png'],
                        ['nama' => 'FARHAN', 'jabatan' => 'Anggota', 'foto' => 'profile-2.png'],
                        ['nama' => 'GILANG', 'jabatan' => 'Anggota', 'foto' => 'profile-3.png'],
                        ['nama' => 'HANI', 'jabatan' => 'Anggota', 'foto' => 'profile-1.png'],
                    ]
                ],
                [
                    'nama' => 'PSDM',
                    'deskripsi' => 'Mengelola kaderisasi, mempererat keakraban antar anggota, serta mengoptimalkan potensi kepemimpinan dan soft skill seluruh pengurus.',
                    'icon' => '🤝',
                    'ketua' => [
                        'nama' => 'RIZKY PRATAMA',
                        'jabatan' => 'Ketua Divisi',
                        'foto' => 'profile-1.png'
                    ],
                    'anggota' => [
                        ['nama' => 'RIZKY', 'jabatan' => 'Kadiv', 'foto' => 'profile-1.png'],
                        ['nama' => 'INDRA', 'jabatan' => 'Sekdiv', 'foto' => 'profile-2.png'],
                        ['nama' => 'JOKO', 'jabatan' => 'Anggota', 'foto' => 'profile-3.png'],
                        ['nama' => 'KIKI', 'jabatan' => 'Anggota', 'foto' => 'profile-1.png'],
                        ['nama' => 'LESTARI', 'jabatan' => 'Anggota', 'foto' => 'profile-2.png'],
                    ]
                ],
                [
                    'nama' => 'INFOKOM',
                    'deskripsi' => 'Bertanggung jawab atas publikasi media kreatif, desain visual, dokumentasi kegiatan, dan pengelolaan saluran informasi organisasi.',
                    'icon' => '🎨',
                    'ketua' => [
                        'nama' => 'MAYA ROSITA',
                        'jabatan' => 'Ketua Divisi',
                        'foto' => 'profile-2.png'
                    ],
                    'anggota' => [
                        ['nama' => 'MAYA', 'jabatan' => 'Kadiv', 'foto' => 'profile-2.png'],
                        ['nama' => 'NIDA', 'jabatan' => 'Sekdiv', 'foto' => 'profile-3.png'],
                        ['nama' => 'OSCAR', 'jabatan' => 'Anggota', 'foto' => 'profile-1.png'],
                        ['nama' => 'PUTRI', 'jabatan' => 'Anggota', 'foto' => 'profile-2.png'],
                        ['nama' => 'QORI', 'jabatan' => 'Anggota', 'foto' => 'profile-3.png'],
                    ]
                ]
            ];

            $resolvePhoto = function($path) {
                if (!$path) return asset('assets/images/profile-1.png');
                if (\Illuminate\Support\Str::startsWith($path, ['http://', 'https://', '/'])) {
                    return $path;
                }
                if (\Illuminate\Support\Str::startsWith($path, ['assets/', 'images/'])) {
                    return asset($path);
                }
                if (file_exists(public_path('assets/images/' . $path))) {
                    return asset('assets/images/' . $path);
                }
                if (file_exists(public_path('images/' . $path))) {
                    return asset('images/' . $path);
                }
                return asset('assets/images/profile-1.png');
            };
        @endphp

        <!-- Carousel Container -->
        <div class="relative w-full">
            <div class="flex overflow-x-auto snap-x snap-mandatory gap-6 md:gap-8 hide-scrollbar pb-6 scroll-smooth" id="homeDivisiSlider">
                @foreach($data_divisi as $divisiIndex => $divisi)
                @php
                    $cardPeople = [];
                    if (isset($divisi['ketua']) && !empty($divisi['ketua']['nama'] ?? $divisi['ketua']['name'] ?? null)) {
                        $cardPeople[] = [
                            'nama' => $divisi['ketua']['nama'] ?? $divisi['ketua']['name'],
                            'jabatan' => $divisi['ketua']['jabatan'] ?? $divisi['ketua']['role'] ?? 'Ketua Divisi',
                            'foto' => $resolvePhoto($divisi['ketua']['foto'] ?? $divisi['ketua']['photo'] ?? null),
                            'isKetua' => true
                        ];
                    }
                    foreach (($divisi['anggota'] ?? $divisi['members'] ?? []) as $mem) {
                        $memName = $mem['nama'] ?? $mem['name'] ?? '';
                        if (!$memName) continue;
                        $cardPeople[] = [
                            'nama' => $memName,
                            'jabatan' => $mem['jabatan'] ?? $mem['role'] ?? 'Anggota',
                            'foto' => $resolvePhoto($mem['foto'] ?? $mem['photo'] ?? null),
                            'isKetua' => strtolower($mem['jabatan'] ?? $mem['role'] ?? '') === 'kadiv'
                        ];
                    }
                @endphp

                <!-- Card Divisi Component (Clean Design) -->
                <div 
                    x-data="{ 
                        people: {{ json_encode($cardPeople) }}, 
                        selectedIdx: 0,
                        selectPerson(idx) {
                            this.selectedIdx = idx;
                        }
                    }"
                    class="relative w-full max-w-[1000px] h-[540px] md:h-[550px] min-h-[540px] bg-gradient-to-br from-[#f8f9ff] to-[#e4effc] rounded-[36px] md:rounded-[40px] shadow-xl overflow-hidden shrink-0 snap-center transition-all duration-300"
                >
                    <!-- Background Dekoratif (Pure CSS, Crisp, Clean) -->
                    <div class="absolute -right-20 top-10 w-[400px] h-[400px] border-[40px] border-blue-100/60 rounded-full opacity-70 pointer-events-none z-0"></div>
                    <div class="absolute -right-10 top-20 w-[350px] h-[350px] border-[2px] border-blue-200 border-dashed rounded-full opacity-80 pointer-events-none z-0"></div>

                    <!-- ================= KONTEN KIRI (Teks Divisi) ================= -->
                    <div class="absolute top-10 md:top-12 left-8 md:left-12 w-[55%] md:w-1/2 z-10">
                        <div class="w-12 h-12 md:w-14 md:h-14 bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl flex items-center justify-center shadow-[0_5px_15px_rgba(59,130,246,0.15)] mb-4 md:mb-6">
                            <span class="text-blue-500 font-bold text-xl md:text-2xl">{!! $divisi['icon'] ?? '&lt;/&gt;' !!}</span>
                        </div>

                        <h3 class="text-xs font-bold text-gray-900 tracking-wider uppercase">DIVISI</h3>
                        <h1 class="text-4xl md:text-6xl font-black text-transparent bg-clip-text bg-gradient-to-b from-blue-500 to-blue-700 drop-shadow-md mt-1 mb-3 md:mb-4 uppercase leading-tight">
                            {{ $divisi['nama'] ?? $divisi['name'] ?? '' }}
                        </h1>

                        <p class="text-gray-700 text-xs md:text-sm leading-relaxed max-w-sm font-medium">
                            {{ $divisi['deskripsi'] ?? $divisi['desc'] ?? '' }}
                        </p>
                        <div class="h-1.5 w-16 bg-blue-700 rounded-full mt-4 md:mt-6 shadow-sm"></div>
                    </div>

                    <!-- ================= KONTEN KANAN (Foto Personil & Blue Arch) ================= -->
                    <div class="absolute bottom-16 right-8 md:right-24 w-[240px] md:w-[300px] h-[320px] md:h-[370px] z-0 flex justify-center items-end">
                        <!-- Blue Arch Background -->
                        <div class="absolute bottom-0 w-[220px] md:w-[280px] h-[240px] md:h-[300px] bg-[#8abffe] rounded-t-full shadow-inner z-0"></div>
                        
                        <!-- Main Person Photo (Dinamis Berubah saat Personil Diklik) -->
                        <img 
                            :src="people[selectedIdx] ? people[selectedIdx].foto : '{{ $cardPeople[0]['foto'] ?? '' }}'" 
                            :alt="people[selectedIdx] ? people[selectedIdx].nama : ''" 
                            class="relative z-10 h-[310px] md:h-[370px] object-cover object-bottom drop-shadow-2xl transition-all duration-300 transform scale-100 rounded-b-lg"
                        />
                        
                        <!-- Floating Name Badge (Dinamis Berubah Sesuai Orang Terpilih) -->
                        <div class="absolute top-10 md:top-14 -left-6 md:-left-16 bg-white px-5 md:px-6 py-2 md:py-2.5 rounded-full shadow-[0_10px_25px_rgba(0,0,0,0.15)] z-20 text-center flex flex-col justify-center items-center border border-blue-50/80 transition-all duration-300">
                            <span x-text="people[selectedIdx] ? people[selectedIdx].nama : '{{ $cardPeople[0]['nama'] ?? '' }}'" class="font-black text-gray-900 text-xs md:text-sm leading-tight uppercase whitespace-nowrap"></span>
                            <span x-text="people[selectedIdx] ? people[selectedIdx].jabatan : '{{ $cardPeople[0]['jabatan'] ?? '' }}'" class="text-blue-600 text-[10px] md:text-xs font-semibold mt-0.5 whitespace-nowrap"></span>
                        </div>
                    </div>

                    <!-- ================= KOTAK ANGGOTA (Daftar Personil Bottom Box) ================= -->
                    <div class="absolute bottom-10 md:bottom-14 left-6 md:left-10 right-6 md:right-10 bg-white/95 backdrop-blur-md rounded-3xl p-3.5 md:p-5 shadow-[0_15px_40px_rgba(0,0,0,0.08)] flex items-center justify-between z-30 border border-blue-50/80">
                        
                        <div class="pr-4 md:pr-6 border-r border-gray-100 shrink-0">
                            <h4 class="text-blue-600 font-bold text-xs md:text-sm whitespace-nowrap">Anggota Divisi</h4>
                            <div class="h-1 w-10 bg-blue-700 rounded-full mt-1"></div>
                        </div>

                        <!-- List Personil (Setiap Foto Dapat Diklik: Misal Rina Diklik -> Rina Muncul Sebagai Foto Utama) -->
                        <div class="flex flex-nowrap items-end gap-3 md:gap-4 pl-4 md:pl-6 overflow-x-auto hide-scrollbar w-full py-1">
                            <template x-for="(person, idx) in people" :key="idx">
                                <div 
                                    @click="selectPerson(idx)"
                                    class="flex flex-col items-center shrink-0 cursor-pointer group transition-all duration-200"
                                >
                                    <!-- Foto Avatar -->
                                    <div 
                                        :class="selectedIdx === idx ? 'w-13 h-15 md:w-14 md:h-16 border-blue-500 ring-2 ring-blue-400/40 scale-105 shadow-sm' : 'w-11 h-13 md:w-12 md:h-14 border-transparent opacity-80 group-hover:opacity-100'"
                                        class="bg-blue-100 rounded-lg overflow-hidden mb-1 border transition-all duration-200"
                                    >
                                        <img :src="person.foto" :alt="person.nama" class="w-full h-full object-cover">
                                    </div>
                                    <span :class="selectedIdx === idx ? 'text-blue-700 font-extrabold' : 'text-gray-900 font-bold'" class="text-[10px] uppercase whitespace-nowrap max-w-[70px] truncate text-center" x-text="person.nama"></span>
                                    <span class="text-[9px] text-blue-600 font-semibold whitespace-nowrap text-center" x-text="person.jabatan"></span>
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- ================= INDIKATOR DOTS TIAP PERSONIL ================= -->
                    <div class="absolute bottom-3 md:bottom-4 left-1/2 transform -translate-x-1/2 flex items-center gap-2 z-40">
                        <template x-for="(person, idx) in people" :key="idx">
                            <button 
                                @click="selectPerson(idx)"
                                :aria-label="'Pilih ' + person.nama"
                                :class="selectedIdx === idx ? 'w-5 bg-blue-600 rounded-full h-2 shadow-sm' : 'w-2 bg-gray-300 hover:bg-gray-400 rounded-full h-2 transition-all'"
                                class="h-2 transition-all duration-300 cursor-pointer focus:outline-none"
                            ></button>
                        </template>
                    </div>

                </div>
                @endforeach
            </div>

            <!-- Controls -->
            <button 
                onclick="moveHomeDivisiSlide(-1)" 
                aria-label="Previous Slide"
                class="absolute top-1/2 -left-4 md:-left-5 -translate-y-1/2 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white shadow-xl flex items-center justify-center text-gray-700 hover:text-blue-600 hover:scale-110 transition-all z-40 border border-gray-100"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
            </button>

            <button 
                onclick="moveHomeDivisiSlide(1)" 
                aria-label="Next Slide"
                class="absolute top-1/2 -right-4 md:-right-5 -translate-y-1/2 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white shadow-xl flex items-center justify-center text-gray-700 hover:text-blue-600 hover:scale-110 transition-all z-40 border border-gray-100"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
            </button>
        </div>
    </div>
</section>

<script>
    function moveHomeDivisiSlide(direction) {
        const slider = document.getElementById('homeDivisiSlider');
        if (!slider) return;
        const scrollAmount = slider.clientWidth;
        slider.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
    }
</script>