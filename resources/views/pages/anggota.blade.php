@extends('layouts.app')

@section('title', 'Daftar Anggota — UKMFT-ITC')

@section('content')
    <div class="relative overflow-x-hidden min-h-screen bg-slate-50">
        {{-- Navbar Header --}}
        <x-navbar />

        <!-- ================= HERO / TOP SECTION HALAMAN ANGGOTA ================= -->
        <section class="relative min-h-[640px] md:min-h-[720px] flex items-center justify-center pt-28 pb-16 px-4 sm:px-6 lg:px-8 overflow-hidden text-center bg-slate-900">
            <!-- Background Image -->
            <img 
                src="{{ asset('assets/images/profile-1.jpg') }}" 
                alt="Background Header Halaman Anggota" 
                class="absolute inset-0 w-full h-full object-cover object-center pointer-events-none z-0 opacity-80" 
            />
            
            <!-- Dark Overlay Gradient -->
            <div class="absolute inset-0 bg-gradient-to-b from-slate-950/70 via-slate-950/50 to-slate-950/80 z-0"></div>

            <!-- Konten Utama Top Section -->
            <div class="relative z-10 max-w-[950px] mx-auto flex flex-col items-center justify-center text-center">
                <!-- Logo Halaman Anggota -->
                <div class="mb-6 transform hover:scale-105 transition-transform duration-300 flex justify-center">
                    <img 
                        src="{{ asset('images/logo-itc.png') }}" 
                        alt="Logo UKMFT-ITC" 
                        class="w-[340px] sm:w-[520px] md:w-[704px] h-auto max-h-[469px] object-contain drop-shadow-[0_15px_35px_rgba(0,0,0,0.6)]" 
                    />
                </div>

                <!-- Judul Utama -->
                <h1 class="text-3xl sm:text-5xl md:text-6xl font-black text-[#38bdf8] drop-shadow-[0_4px_16px_rgba(0,0,0,0.7)] mb-5 uppercase tracking-wide leading-tight">
                    Bersama, Berkarya, Berinovasi
                </h1>

                <!-- Deskripsi -->
                <p class="text-white/90 text-sm sm:text-base md:text-lg max-w-3xl mx-auto font-medium leading-relaxed mb-8 drop-shadow-md">
                    ITC adalah wadah pengembangan diri di bidang teknologi informasi untuk menciptakan karya, solusi, dan inovasi yang berdampak nyata
                </p>

                <!-- Tombol CTA -->
                <a 
                    href="#divisi-anggota" 
                    class="inline-flex items-center gap-3 bg-gradient-to-r from-[#002054] to-[#0256DD] text-white text-sm sm:text-base font-extrabold px-8 py-3.5 sm:px-9 sm:py-4 rounded-full shadow-[0_10px_25px_rgba(0,32,84,0.4)] hover:shadow-2xl hover:scale-105 transition-all duration-300 border border-blue-400/30"
                >
                    Lihat Divisi Kami
                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </section>

        @php
            $resolvePhoto = function($path) {
                if (!$path) return asset('assets/images/profile-1.jpg');
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
                return asset('assets/images/profile-1.jpg');
            };

            $availablePhotos = [
                asset('assets/images/profile-1.jpg'),
                asset('assets/images/profile-2.jpg'),
                asset('assets/images/profile-3.jpg'),
            ];

            $formatted_divisi = [];
            foreach ($data_divisi as $dIdx => $div) {
                $divName = strtoupper($div['nama'] ?? $div['name'] ?? 'DIVISI');
                
                $ketua = null;
                if (!empty($div['ketua']['nama'] ?? $div['ketua']['name'] ?? null)) {
                    $mainFoto = $resolvePhoto($div['ketua']['foto'] ?? $div['ketua']['photo'] ?? null);
                    $ketua = [
                        'nama' => $div['ketua']['nama'] ?? $div['ketua']['name'],
                        'jabatan' => $div['ketua']['jabatan'] ?? $div['ketua']['role'] ?? 'Ketua Divisi',
                        'foto' => $mainFoto,
                        'galeri' => [
                            $mainFoto,
                            $availablePhotos[1],
                            $availablePhotos[2],
                            $availablePhotos[0],
                        ]
                    ];
                }

                $anggota = [];
                foreach (($div['anggota'] ?? $div['members'] ?? []) as $mIdx => $mem) {
                    $memName = $mem['nama'] ?? $mem['name'] ?? '';
                    if (!$memName) continue;
                    $mainFoto = $resolvePhoto($mem['foto'] ?? $mem['photo'] ?? null);
                    
                    $photo2 = $availablePhotos[($mIdx + 1) % count($availablePhotos)];
                    $photo3 = $availablePhotos[($mIdx + 2) % count($availablePhotos)];
                    $photo4 = $availablePhotos[$mIdx % count($availablePhotos)];

                    $anggota[] = [
                        'nama' => $memName,
                        'jabatan' => $mem['jabatan'] ?? $mem['role'] ?? 'Anggota',
                        'foto' => $mainFoto,
                        'galeri' => [
                            $mainFoto,
                            $photo2,
                            $photo3,
                            $photo4,
                        ]
                    ];
                }

                $iconKey = 'default';
                if (str_contains($divName, 'LITBANG')) $iconKey = 'litbang';
                elseif (str_contains($divName, 'HUMAS')) $iconKey = 'humas';
                elseif (str_contains($divName, 'P&K') || str_contains($divName, 'P & K')) $iconKey = 'pk';
                elseif (str_contains($divName, 'PSDM')) $iconKey = 'psdm';
                elseif (str_contains($divName, 'KOMINFO') || str_contains($divName, 'INFOKOM')) $iconKey = 'kominfo';

                $formatted_divisi[] = [
                    'nama' => $divName,
                    'label' => str_contains($divName, 'P&K') ? 'P & K' : (str_contains($divName, 'INFOKOM') ? 'Kominfo' : ucfirst(strtolower($divName))),
                    'iconKey' => $iconKey,
                    'deskripsi' => $div['deskripsi'] ?? $div['desc'] ?? 'Berfokus pada pengembangan dan kontribusi teknologi untuk masyarakat.',
                    'ketua' => $ketua,
                    'anggota' => $anggota,
                ];
            }
        @endphp

        <!-- ================= SECTION DAFTAR ANGGOTA DIVISI ================= -->
        <section id="divisi-anggota" class="relative pt-16 md:pt-24 pb-24 md:pb-32 overflow-hidden bg-[#CEDFFF]">

            <!-- Wave Blue Image — sits ON TOP of the bg color, behind all text/tabs content -->
            <img 
                src="{{ asset('assets/images/wave-blue.png') }}" 
                alt="Wave Blue Background" 
                class="absolute top-0 left-0 w-full h-[480px] sm:h-[560px] md:h-[640px] object-cover object-center pointer-events-none z-10 opacity-100" 
            />

            <!-- Light card panel that peeks below the wave — same layering trick as reference -->
            <div class="absolute bottom-0 left-0 right-0 h-[55%] bg-[#CEDFFF] rounded-t-[60px] md:rounded-t-[90px] z-10 shadow-[0_-8px_40px_rgba(0,56,145,0.08)]"></div>

            <div 
                class="relative z-20 max-w-[1320px] mx-auto px-4 sm:px-6 lg:px-8"
                x-data="{
                    activeDivisi: '{{ $formatted_divisi[0]['nama'] ?? 'LITBANG' }}',
                    divisiList: {{ json_encode($formatted_divisi) }},
                    
                    get currentDivisi() {
                        return this.divisiList.find(d => d.nama === this.activeDivisi) || this.divisiList[0];
                    },

                    get currentMembers() {
                        const div = this.currentDivisi;
                        if (!div) return [];
                        let list = [];
                        if (div.ketua && div.ketua.nama) {
                            list.push({
                                nama: div.ketua.nama,
                                jabatan: div.ketua.jabatan || 'Ketua Divisi',
                                foto: div.ketua.foto,
                                galeri: div.ketua.galeri || [div.ketua.foto],
                                isKetua: true
                            });
                        }
                        if (div.anggota && Array.isArray(div.anggota)) {
                            div.anggota.forEach(m => {
                                if (m.nama) {
                                    list.push({
                                        nama: m.nama,
                                        jabatan: m.jabatan || 'Anggota',
                                        foto: m.foto,
                                        galeri: m.galeri || [m.foto],
                                        isKetua: (m.jabatan || '').toLowerCase() === 'kadiv'
                                    });
                                }
                            });
                        }
                        return list;
                    },

                    selectDivisi(nama) {
                        this.activeDivisi = nama;
                    }
                }"
            >
                <!-- ================= SECTION HEADER (IMAGE 1 STYLE) ================= -->
                <div class="mb-10 text-center flex flex-col items-center">
                    <!-- Judul Utama "DIVISI UKMFT-ITC" -->
                    <h2 class="text-4xl sm:text-5xl md:text-6xl font-black tracking-tight mb-4 drop-shadow-md">
                        <span class="text-[#002054]">DIVISI </span>
                        <span class="bg-gradient-to-r from-[#0256DD] via-[#38bdf8] to-[#0256DD] bg-clip-text text-transparent">UKMFT-ITC</span>
                    </h2>

                    <!-- Deskripsi Subtitle -->
                    <p class="text-slate-700 text-sm sm:text-base md:text-lg max-w-2xl mx-auto font-medium leading-relaxed mb-4">
                        Setiap divisi memiliki peran penting dalam mengembangkan organisasi dan menciptakan dampak nyata melalui inovasi, kolaborasi, dan dedikasi.
                    </p>

                    <!-- Blue Underline Line -->
                    <div class="h-1.5 w-20 bg-gradient-to-r from-[#002054] to-[#0256DD] rounded-full shadow-sm"></div>
                </div>

                <!-- ================= TAB SELECTOR BAR (IMAGE 1 CONTAINER) ================= -->
                <div class="mb-16 flex justify-center">
                    <div class="bg-white/90 backdrop-blur-xl rounded-[32px] p-2.5 sm:p-3 shadow-xl border border-white/80 inline-flex items-center justify-center gap-2 sm:gap-4 max-w-full overflow-x-auto hide-scrollbar">
                        <template x-for="d in divisiList" :key="d.nama">
                            <div 
                                @click="selectDivisi(d.nama)"
                                :class="activeDivisi === d.nama ? 'bg-gradient-to-r from-[#002054] to-[#0256DD] rounded-[24px] text-white shadow-xl scale-105 border border-blue-400/30' : 'bg-transparent hover:bg-slate-100/80 rounded-[24px] text-slate-800'"
                                class="px-5 py-3.5 sm:px-6 sm:py-4 flex flex-col items-center justify-center transition-all duration-300 min-w-[100px] sm:min-w-[125px] cursor-pointer group shrink-0"
                            >
                                <!-- Icon Box -->
                                <div 
                                    :class="activeDivisi === d.nama ? 'bg-white text-[#0256DD] shadow-md' : 'bg-[#D8E6FC] text-[#0256DD] group-hover:bg-blue-100'"
                                    class="rounded-2xl w-12 h-12 flex items-center justify-center font-black text-xl mb-2 transition-colors duration-200"
                                >
                                    <!-- Litbang Icon -->
                                    <template x-if="d.iconKey === 'litbang'">
                                        <span class="font-extrabold text-xl font-mono stroke-2">&lt;/&gt;</span>
                                    </template>
                                    <!-- Humas Icon -->
                                    <template x-if="d.iconKey === 'humas'">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2a2.5 2.5 0 100 5 2.5 2.5 0 000-5zm-5 7c-1.1 0-2 .9-2 2v4c0 .55.45 1 1 1h1v6c0 .55.45 1 1 1h2c.55 0 1-.45 1-1v-5h2v5c0 .55.45 1 1 1h2c.55 0 1-.45 1-1v-6h1c.55 0 1-.45 1-1v-4c0-1.1-.9-2-2-2H7z"/></svg>
                                    </template>
                                    <!-- P & K Icon -->
                                    <template x-if="d.iconKey === 'pk'">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                                    </template>
                                    <!-- PSDM Icon -->
                                    <template x-if="d.iconKey === 'psdm'">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                                    </template>
                                    <!-- Kominfo Icon -->
                                    <template x-if="d.iconKey === 'kominfo'">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path stroke-linecap="round" stroke-linejoin="round" d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83M16.62 12l-5.74 9.94"/></svg>
                                    </template>
                                    <!-- Default Fallback Icon -->
                                    <template x-if="!['litbang','humas','pk','psdm','kominfo'].includes(d.iconKey)">
                                        <span class="font-extrabold text-xl font-mono stroke-2">&lt;/&gt;</span>
                                    </template>
                                </div>

                                <!-- Label Text -->
                                <span 
                                    :class="activeDivisi === d.nama ? 'text-white font-extrabold' : 'text-slate-800 font-bold'"
                                    class="text-xs sm:text-sm tracking-wide mb-1"
                                    x-text="d.label || d.nama"
                                ></span>

                                <!-- Active Underline Bar -->
                                <div 
                                    :class="activeDivisi === d.nama ? 'bg-white opacity-100' : 'bg-transparent opacity-0'"
                                    class="h-0.5 w-7 rounded-full transition-opacity duration-200"
                                ></div>
                            </div>
                        </template>
                    </div>
                </div>

                <!-- ================= VERTICAL STACK OF INDIVIDUAL MEMBER CARDS ================= -->
                <div class="relative w-full max-w-[1080px] mx-auto bg-[#003891]/10 backdrop-blur-md rounded-[44px] md:rounded-[56px] p-4 sm:p-7 md:p-10 shadow-[0_15px_40px_rgba(0,32,84,0.06)] border border-white/60 flex flex-col gap-8 md:gap-12 items-center">
                    <template x-for="(mem, memIdx) in currentMembers" :key="activeDivisi + '-' + memIdx + '-' + mem.nama">
                        <!-- Individual Member Card Component -->
                        <div 
                            x-data="{ activePhotoIdx: 0 }"
                            :id="'card-member-' + memIdx"
                            class="relative w-full max-w-[1000px] h-[540px] md:h-[560px] min-h-[540px] bg-white rounded-[32px] md:rounded-[42px] shadow-[0_20px_50px_rgba(0,32,84,0.12)] overflow-hidden border border-white/90 transition-all duration-300 hover:shadow-blue-900/15"
                        >
                            <!-- Card Background Image (background-card-divisi.png) -->
                            <img 
                                src="{{ asset('assets/images/background-card-divisi.png') }}" 
                                alt="Background Card Divisi" 
                                class="absolute inset-0 w-full h-full object-cover object-center pointer-events-none z-0 rounded-[32px] md:rounded-[42px]" 
                            />

                            <!-- ================= KONTEN KIRI (Teks Divisi) ================= -->
                            <div class="absolute top-8 md:top-12 left-8 md:left-12 w-[55%] md:w-1/2 z-10">
                                <!-- Icon Box -->
                                <div class="w-12 h-12 md:w-14 md:h-14 bg-[#D8E6FC] rounded-2xl flex items-center justify-center shadow-[0_5px_15px_rgba(59,130,246,0.15)] mb-4 md:mb-6">
                                    <template x-if="currentDivisi.iconKey === 'litbang'">
                                        <span class="text-[#0256DD] font-black text-xl md:text-2xl font-mono">&lt;/&gt;</span>
                                    </template>
                                    <template x-if="currentDivisi.iconKey === 'humas'">
                                        <svg class="w-6 h-6 text-[#0256DD]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2a2.5 2.5 0 100 5 2.5 2.5 0 000-5zm-5 7c-1.1 0-2 .9-2 2v4c0 .55.45 1 1 1h1v6c0 .55.45 1 1 1h2c.55 0 1-.45 1-1v-5h2v5c0 .55.45 1 1 1h2c.55 0 1-.45 1-1v-6h1c.55 0 1-.45 1-1v-4c0-1.1-.9-2-2-2H7z"/></svg>
                                    </template>
                                    <template x-if="currentDivisi.iconKey === 'pk'">
                                        <svg class="w-6 h-6 text-[#0256DD]" fill="currentColor" viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                                    </template>
                                    <template x-if="currentDivisi.iconKey === 'psdm'">
                                        <svg class="w-6 h-6 text-[#0256DD]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                                    </template>
                                    <template x-if="currentDivisi.iconKey === 'kominfo'">
                                        <svg class="w-6 h-6 text-[#0256DD]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path stroke-linecap="round" stroke-linejoin="round" d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83M16.62 12l-5.74 9.94"/></svg>
                                    </template>
                                    <template x-if="!['litbang','humas','pk','psdm','kominfo'].includes(currentDivisi.iconKey)">
                                        <span class="text-[#0256DD] font-black text-xl md:text-2xl font-mono">&lt;/&gt;</span>
                                    </template>
                                </div>

                                <h3 class="text-xs font-black text-slate-800 tracking-wider uppercase mb-1">DIVISI</h3>
                                <h1 
                                    class="text-4xl md:text-6xl font-black drop-shadow-md mb-3 md:mb-4 uppercase leading-none" 
                                    style="background-image: linear-gradient(90deg, #002C73 0%, #6FA6FF 50%, #0256DD 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; color: transparent;"
                                    x-text="currentDivisi.nama"
                                ></h1>

                                <p class="text-slate-700 text-xs md:text-sm leading-relaxed max-w-sm font-medium" x-text="currentDivisi.deskripsi"></p>
                                
                                <div class="h-1.5 w-16 bg-gradient-to-r from-[#002054] to-[#0256DD] rounded-full mt-4 md:mt-6 shadow-sm"></div>
                            </div>

                            <!-- ================= KONTEN KANAN (Foto Personil Utama & Tech Ring Arch) ================= -->
                            <div class="absolute bottom-12 right-6 md:right-16 z-10 flex justify-center items-end">
                                
                                <!-- Concentric Cyber Tech Ring Pattern Background -->
                                <svg class="absolute -top-12 -left-12 w-[340px] md:w-[400px] h-[340px] md:h-[400px] pointer-events-none opacity-80 z-0" viewBox="0 0 400 400" fill="none">
                                    <circle cx="200" cy="200" r="180" stroke="#38bdf8" stroke-width="1.5" stroke-dasharray="6 8" opacity="0.6" />
                                    <circle cx="200" cy="200" r="145" stroke="#0256DD" stroke-width="2" opacity="0.7" />
                                    <circle cx="200" cy="200" r="115" stroke="#60a5fa" stroke-width="1.5" stroke-dasharray="12 6" opacity="0.8" />
                                    <circle cx="200" cy="20" r="4" fill="#0256DD" />
                                    <circle cx="380" cy="200" r="4" fill="#0256DD" />
                                    <circle cx="200" cy="380" r="4" fill="#0256DD" />
                                    <circle cx="20" cy="200" r="4" fill="#0256DD" />
                                </svg>

                                <!-- Curved Dome Arch Container -->
                                <div class="relative w-[230px] sm:w-[270px] md:w-[310px] h-[280px] sm:h-[320px] md:h-[360px] bg-[#82b8ff] rounded-t-full overflow-hidden shadow-xl border-2 border-white/50 flex items-end justify-center z-10">
                                    <!-- Dynamic Selected Supplementary Photo of THIS specific member -->
                                    <img 
                                        :src="(mem.galeri && mem.galeri[activePhotoIdx]) ? mem.galeri[activePhotoIdx] : mem.foto" 
                                        :alt="mem.nama" 
                                        class="w-full h-full object-cover object-top transition-all duration-300 transform scale-100 drop-shadow-2xl"
                                    />
                                </div>
                                
                                <!-- Floating Name Pill Badge (Unik untuk Anggota Ini) -->
                                <div class="absolute top-1/4 -left-10 md:-left-20 bg-white/95 backdrop-blur-md px-5 md:px-7 py-2.5 md:py-3 rounded-2xl shadow-[0_12px_35px_rgba(0,0,0,0.18)] z-20 text-center flex flex-col justify-center items-center border border-blue-100 transition-all duration-300">
                                    <span x-text="mem.nama" class="font-black text-slate-900 text-xs md:text-base leading-tight uppercase whitespace-nowrap tracking-wide"></span>
                                    <span x-text="mem.jabatan" class="text-[#0256DD] text-[10px] md:text-xs font-extrabold mt-0.5 whitespace-nowrap"></span>
                                </div>
                            </div>

                            <!-- ================= KOTAK FOTO SUPLEMENTER (Daftar Foto Tambahan Personil Ini) ================= -->
                            <div class="absolute bottom-10 md:bottom-12 left-6 md:left-10 right-6 md:right-10 bg-white/95 backdrop-blur-md rounded-[28px] p-3.5 md:p-4 shadow-[0_15px_40px_rgba(0,0,0,0.09)] flex items-center justify-between z-30 border border-slate-100">
                                
                                <!-- Left Header -->
                                <div class="pr-4 md:pr-6 border-r border-slate-100 shrink-0">
                                    <h4 class="text-[#0256DD] font-extrabold text-xs md:text-sm whitespace-nowrap">Foto & Dokumentasi</h4>
                                    <div class="h-1 w-10 bg-[#0256DD] rounded-full mt-1"></div>
                                </div>

                                <!-- Supplementary Photo Thumbnails of THIS Specific Member -->
                                <div class="flex items-center justify-start w-full pl-3 md:pl-5 overflow-x-auto hide-scrollbar py-1 gap-2.5 md:gap-4">
                                    <template x-for="(gFoto, gIdx) in (mem.galeri || [mem.foto])" :key="gIdx">
                                        <div 
                                            @click="activePhotoIdx = gIdx"
                                            class="flex flex-col items-center shrink-0 cursor-pointer group transition-all duration-200"
                                        >
                                            <!-- Foto Avatar Thumbnail -->
                                            <div 
                                                :class="activePhotoIdx === gIdx ? 'w-12 h-14 md:w-14 md:h-16 border-[#0256DD] ring-2 ring-[#0256DD]/50 scale-105 shadow-md opacity-100' : 'w-10 h-12 md:w-11 md:h-13 border-transparent opacity-70 hover:opacity-100'"
                                                class="bg-blue-50 rounded-xl overflow-hidden mb-1 border transition-all duration-200 relative"
                                            >
                                                <img :src="gFoto" :alt="mem.nama + ' foto ' + (gIdx + 1)" class="w-full h-full object-cover">
                                            </div>
                                            <span :class="activePhotoIdx === gIdx ? 'text-[#0256DD] font-black' : 'text-slate-800 font-bold'" class="text-[9px] uppercase whitespace-nowrap text-center" x-text="'Foto ' + (gIdx + 1)"></span>
                                        </div>
                                    </template>
                                </div>
                            </div>

                        </div>
                    </template>
                </div>

            </div>
        </section>

        <!-- Footer -->
        <x-footer />
    </div>
@endsection

<style>
.hide-scrollbar {
    -ms-overflow-style: none;
    scrollbar-width: none;
}
.hide-scrollbar::-webkit-scrollbar {
    display: none;
}
</style>

