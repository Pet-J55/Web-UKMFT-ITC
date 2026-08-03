<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Divisi Dinamis — UKM FT ITC</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body { font-family: 'Poppins', sans-serif; }
        
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="bg-slate-900 min-h-screen flex flex-col items-center justify-center p-4 md:p-8 gap-6 relative overflow-x-hidden">

    <!-- Background Divisi Image -->
    <img 
        src="{{ asset('assets/images/background-divisi.png') }}" 
        alt="Background Divisi" 
        class="absolute inset-0 w-full h-full object-cover object-center pointer-events-none z-0 opacity-80" 
    />

    <!-- Header Navigation Back Link -->
    <div class="w-full max-w-[1000px] flex items-center justify-between z-20">
        <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-white/80 hover:text-white bg-white/10 hover:bg-white/20 px-4 py-2 rounded-full text-sm font-semibold transition-all backdrop-blur-md">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            Kembali ke Beranda
        </a>
        <span class="text-white/60 text-xs font-medium uppercase tracking-widest">Divisi UKM FT ITC</span>
    </div>

    @php
        $data_divisi = $data_divisi ?? [
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

    <!-- Cards Wrapper -->
    <div class="relative w-full max-w-[1000px]" id="divisiContainer">
        
        <div class="flex overflow-x-auto snap-x snap-mandatory gap-8 hide-scrollbar pb-4 scroll-smooth" id="divisiSlider">
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

            <!-- Single Card Divisi Component -->
            <div 
                x-data="{ 
                    people: {{ json_encode($cardPeople) }}, 
                    selectedIdx: 0,
                    selectPerson(idx) {
                        this.selectedIdx = idx;
                    }
                }"
                class="relative w-full max-w-[1000px] h-[550px] min-h-[550px] bg-gradient-to-br from-[#f8f9ff] to-[#e4effc] rounded-[40px] shadow-2xl overflow-hidden shrink-0 snap-center transition-all duration-300"
            >
                <!-- Card Background Image (background-card-divisi.png) -->
                <img 
                    src="{{ asset('assets/images/background-card-divisi.png') }}" 
                    alt="Background Card Divisi" 
                    class="absolute inset-0 w-full h-full object-cover object-center pointer-events-none z-0 rounded-[40px]" 
                />

                <!-- ================= KONTEN KIRI (Teks Divisi) ================= -->
                <div class="absolute top-12 left-12 w-1/2 z-10">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl flex items-center justify-center shadow-[0_5px_15px_rgba(59,130,246,0.15)] mb-6">
                        <span class="text-blue-500 font-bold text-2xl">{!! $divisi['icon'] ?? '&lt;/&gt;' !!}</span>
                    </div>

                    <h3 class="text-xs font-bold text-gray-900 tracking-wider uppercase">DIVISI</h3>
                    <h1 class="text-5xl md:text-6xl font-black drop-shadow-md mt-1 mb-4 uppercase leading-tight" style="background-image: linear-gradient(90deg, #002C73 0%, #6FA6FF 50%, #0256DD 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; color: transparent;">
                        {{ $divisi['nama'] }}
                    </h1>

                    <p class="text-gray-700 text-sm leading-relaxed max-w-sm font-medium">
                        {{ $divisi['deskripsi'] }}
                    </p>
                    <div class="h-1.5 w-16 bg-gradient-to-r from-[#0968FF] to-[#063E99] rounded-full mt-6 shadow-sm"></div>
                </div>

                <!-- ================= KONTEN KANAN (Foto Personil & Blue Arch) ================= -->
                <div class="absolute bottom-16 right-24 w-[300px] h-[350px] z-0 flex justify-center items-end">
                    <!-- Blue Arch Background -->
                    <div class="absolute bottom-0 w-[280px] h-[300px] bg-[#8abffe] rounded-t-full shadow-inner z-0"></div>
                    
                    <!-- Foto Main Person (Dinamis Berubah Saat Personil Diklik) -->
                    <img 
                        :src="people[selectedIdx] ? people[selectedIdx].foto : '{{ $cardPeople[0]['foto'] ?? '' }}'" 
                        :alt="people[selectedIdx] ? people[selectedIdx].nama : ''" 
                        class="relative z-10 h-[380px] max-w-[290px] object-cover object-bottom drop-shadow-2xl transition-all duration-300 transform scale-100 rounded-b-lg"
                    />
                    
                    <!-- Floating Name Badge -->
                    <div class="absolute top-16 -left-12 bg-white px-6 py-2.5 rounded-full shadow-[0_10px_25px_rgba(0,0,0,0.15)] z-20 text-center flex flex-col justify-center items-center border border-blue-50/80 transition-all duration-300">
                        <span x-text="people[selectedIdx] ? people[selectedIdx].nama : '{{ $cardPeople[0]['nama'] ?? '' }}'" class="font-black text-gray-900 text-sm leading-tight uppercase whitespace-nowrap"></span>
                        <span x-text="people[selectedIdx] ? people[selectedIdx].jabatan : '{{ $cardPeople[0]['jabatan'] ?? '' }}'" class="text-blue-600 text-xs font-semibold mt-0.5 whitespace-nowrap"></span>
                    </div>
                </div>

                <!-- ================= KOTAK ANGGOTA (Daftar Personil Bottom Box) ================= -->
                <div class="absolute bottom-14 left-10 right-10 bg-white/95 backdrop-blur-md rounded-3xl p-5 shadow-[0_15px_40px_rgba(0,0,0,0.08)] flex items-center justify-between z-30 border border-blue-50/80">
                    
                    <div class="pr-6 border-r border-gray-100 shrink-0">
                        <h4 class="text-blue-600 font-bold text-sm whitespace-nowrap">Anggota Divisi</h4>
                        <div class="h-1 w-10 bg-blue-700 rounded-full mt-1"></div>
                    </div>

                    <!-- List Personil (Setiap Foto Dapat Diklik) -->
                    <div class="flex flex-nowrap items-end gap-3 pl-6 overflow-x-auto hide-scrollbar w-full py-1">
                        <template x-for="(person, idx) in people" :key="idx">
                            <div 
                                @click="selectPerson(idx)"
                                class="flex flex-col items-center shrink-0 cursor-pointer group transition-all duration-200"
                            >
                                <!-- Foto Avatar -->
                                <div 
                                    :class="selectedIdx === idx ? 'w-14 h-16 border-blue-500 ring-2 ring-blue-400/40 scale-105 shadow-sm' : 'w-12 h-14 border-transparent opacity-80 group-hover:opacity-100'"
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
                <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex items-center gap-2 z-40">
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

        <!-- Slider Controls Navigation -->
        <button 
            onclick="moveSlide(-1)" 
            aria-label="Previous Divisi"
            class="absolute top-1/2 -left-5 md:-left-6 -translate-y-1/2 w-11 h-11 rounded-full bg-white shadow-lg flex items-center justify-center text-gray-700 hover:text-blue-600 hover:scale-110 transition-all z-40 border border-gray-100"
        >
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
        </button>

        <button 
            onclick="moveSlide(1)" 
            aria-label="Next Divisi"
            class="absolute top-1/2 -right-5 md:-right-6 -translate-y-1/2 w-11 h-11 rounded-full bg-white shadow-lg flex items-center justify-center text-gray-700 hover:text-blue-600 hover:scale-110 transition-all z-40 border border-gray-100"
        >
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
        </button>

    </div>

    <script>
        function moveSlide(direction) {
            const slider = document.getElementById('divisiSlider');
            if (!slider) return;
            const scrollAmount = slider.clientWidth;
            slider.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
        }
    </script>

</body>
</html>
