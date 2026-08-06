@extends('layouts.app')

@section('title', 'Program Kerja — UKM FT ITC')

@section('content')
    <div class="relative min-h-screen bg-[#F8FAFC]">
        {{-- Navbar Header --}}
        <x-navbar />

        <!-- ================= HERO / TOP SECTION HALAMAN PROGRAM KERJA ================= -->
        <section class="relative pt-36 pb-16 px-4 sm:px-6 lg:px-8 max-w-[1320px] mx-auto min-h-[600px] flex flex-col md:flex-row items-center justify-between gap-10">
            
            <!-- Dekorasi Dot Pattern Kiri -->
            <div class="absolute left-0 top-1/3 -translate-y-1/2 flex gap-2 z-0 opacity-40 pointer-events-none">
                <div class="flex flex-col gap-2">
                    <div class="w-1.5 h-1.5 rounded-full bg-blue-400"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-blue-400"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-blue-400"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-blue-400"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-blue-400"></div>
                </div>
                <div class="flex flex-col gap-2 mt-4">
                    <div class="w-1.5 h-1.5 rounded-full bg-blue-400"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-blue-400"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-blue-400"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-blue-400"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-blue-400"></div>
                </div>
                <div class="flex flex-col gap-2">
                    <div class="w-1.5 h-1.5 rounded-full bg-blue-400"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-blue-400"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-blue-400"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-blue-400"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-blue-400"></div>
                </div>
            </div>

            <!-- Left Content -->
            <div class="relative z-10 w-full md:w-1/2 flex flex-col items-start text-left pt-10 md:pt-0 pl-10 md:pl-20">
                <h1 class="text-5xl sm:text-6xl md:text-7xl font-black text-black tracking-tight mb-10 drop-shadow-[0_4px_8px_rgba(0,0,0,0.1)] uppercase">
                    PROGRAM KERJA
                </h1>

                <div class="flex flex-wrap items-center gap-4 mb-6">
                    <!-- Button Lihat Proker -->
                    <a 
                        href="#daftar-proker" 
                        class="inline-flex items-center gap-3 bg-[#003891] text-white text-base font-bold px-8 py-3.5 rounded-full shadow-[0_8px_20px_rgba(0,56,145,0.4)] hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
                    >
                        Lihat Proker
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>

                    <!-- Button Lihat Dokumentasi -->
                    <a 
                        href="#dokumentasi" 
                        class="inline-flex items-center justify-center bg-white border border-[#003891]/20 text-[#003891] text-base font-bold px-8 py-3.5 rounded-full shadow-[0_4px_12px_rgba(0,56,145,0.08)] hover:shadow-md hover:-translate-y-1 transition-all duration-300"
                    >
                        Lihat Dokumentasi
                    </a>
                </div>
            </div>

            <!-- Right Content / Image -->
            <div class="relative z-10 w-full md:w-1/2 flex justify-end">
                <div class="relative w-full max-w-[623px] h-auto rounded-[40px] overflow-hidden drop-shadow-[0_20px_40px_rgba(0,56,145,0.15)]">
                    <!-- Assuming head-proker.png is the masked/shaped image from the screenshot -->
                    <img 
                        src="{{ asset('assets/images/head-proker.png') }}" 
                        alt="Program Kerja Header" 
                        class="w-full h-auto object-contain"
                    />
                </div>
            </div>
        </section>

        <!-- Dekorasi Background Bawah Kiri -->
        <div class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-[#CEDFFF] rounded-tr-full opacity-60 z-0 pointer-events-none"></div>

        <!-- ================= STATS CARDS SECTION ================= -->
        <section class="relative z-20 max-w-[1320px] mx-auto px-4 sm:px-6 lg:px-8 -mt-8 pb-12">
            <div class="flex flex-wrap justify-center gap-4 sm:gap-6 lg:gap-8">
                
                <!-- Stat 1 -->
                <div class="bg-white/95 backdrop-blur rounded-[24px] px-6 py-4 flex items-center gap-4 shadow-[0_10px_30px_rgba(0,56,145,0.08)] border border-white/50 w-full sm:w-auto">
                    <div class="bg-[#003891] w-12 h-12 rounded-xl flex items-center justify-center text-white shrink-0 shadow-inner">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                    </div>
                    <div class="flex flex-col text-left">
                        <span class="text-2xl font-black text-[#4682B4] leading-none mb-1">5</span>
                        <span class="text-[11px] font-bold text-slate-800 leading-tight">Divisi<br>Aktif</span>
                    </div>
                </div>

                <!-- Stat 2 -->
                <div class="bg-white/95 backdrop-blur rounded-[24px] px-6 py-4 flex items-center gap-4 shadow-[0_10px_30px_rgba(0,56,145,0.08)] border border-white/50 w-full sm:w-auto">
                    <div class="bg-[#003891] w-12 h-12 rounded-xl flex items-center justify-center text-white shrink-0 shadow-inner">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                    </div>
                    <div class="flex flex-col text-left">
                        <span class="text-2xl font-black text-[#4682B4] leading-none mb-1">20+</span>
                        <span class="text-[11px] font-bold text-slate-800 leading-tight">Program Kerja<br>Tiap Tahun</span>
                    </div>
                </div>

                <!-- Stat 3 -->
                <div class="bg-white/95 backdrop-blur rounded-[24px] px-6 py-4 flex items-center gap-4 shadow-[0_10px_30px_rgba(0,56,145,0.08)] border border-white/50 w-full sm:w-auto">
                    <div class="bg-[#003891] w-12 h-12 rounded-xl flex items-center justify-center text-white shrink-0 shadow-inner">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    </div>
                    <div class="flex flex-col text-left">
                        <span class="text-2xl font-black text-[#4682B4] leading-none mb-1">50+</span>
                        <span class="text-[11px] font-bold text-slate-800 leading-tight">Kegiatan<br>Terlaksana</span>
                    </div>
                </div>

                <!-- Stat 4 -->
                <div class="bg-white/95 backdrop-blur rounded-[24px] px-6 py-4 flex items-center gap-4 shadow-[0_10px_30px_rgba(0,56,145,0.08)] border border-white/50 w-full sm:w-auto">
                    <div class="bg-[#003891] w-12 h-12 rounded-xl flex items-center justify-center text-white shrink-0 shadow-inner">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                    </div>
                    <div class="flex flex-col text-left">
                        <span class="text-2xl font-black text-[#4682B4] leading-none mb-1">100+</span>
                        <span class="text-[11px] font-bold text-slate-800 leading-tight">Anggota<br>Terlibat</span>
                    </div>
                </div>

                <!-- Stat 5 -->
                <div class="bg-white/95 backdrop-blur rounded-[24px] px-6 py-4 flex items-center gap-4 shadow-[0_10px_30px_rgba(0,56,145,0.08)] border border-white/50 w-full sm:w-auto">
                    <div class="bg-[#003891] w-12 h-12 rounded-xl flex items-center justify-center text-white shrink-0 shadow-inner">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <div class="flex flex-col text-left">
                        <span class="text-2xl font-black text-[#4682B4] leading-none mb-1">500+</span>
                        <span class="text-[11px] font-bold text-slate-800 leading-tight">Dokumentasi<br>Kegiatan</span>
                    </div>
                </div>

            </div>
        </section>

        <!-- ================= PILIH DIVISI SECTION ================= -->
        <section id="daftar-proker" class="relative z-20 max-w-[1320px] mx-auto px-4 sm:px-6 lg:px-8 py-10 flex flex-col items-center">
            
            <!-- Pilih Divisi Badge -->
            <div class="bg-[#003891] text-white font-extrabold px-12 py-3.5 rounded-full text-xl mb-10 shadow-[0_10px_20px_rgba(0,56,145,0.3)] hover:scale-105 transition-transform duration-300">
                Pilih Divisi
            </div>

            <!-- Divisi Cards Container -->
            <div class="flex flex-wrap justify-center gap-6 md:gap-8 mb-10 w-full">
                
                @php
                    $divisi_list = [
                        ['nama' => '', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />', 'icon_type' => 'stroke'],
                        ['nama' => 'HUMAS', 'icon' => '<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/>', 'icon_type' => 'fill'],
                        ['nama' => 'P&K', 'icon' => '<path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/>', 'icon_type' => 'fill'],
                        ['nama' => 'PSDM', 'icon' => '<path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>', 'icon_type' => 'fill'],
                        ['nama' => 'INFOKOM', 'icon' => '<path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/>', 'icon_type' => 'fill'],
                    ];
                @endphp

                @foreach($divisi_list as $index => $divisi)
                <!-- Card {{ $divisi['nama'] ?: 'LITBANG' }} -->
                <div class="relative w-[190px] h-[220px] rounded-[32px] p-5 flex flex-col items-center justify-between overflow-hidden shadow-[0_15px_30px_rgba(0,0,0,0.15)] hover:-translate-y-2 transition-transform duration-300" style="background: linear-gradient(180deg, #008DD5 0%, #011429 100%);">
                    <!-- Decoration Circle -->
                    <div class="absolute -right-10 top-1/2 -translate-y-1/2 w-28 h-28 rounded-full bg-white/10 blur-[1px]"></div>
                    
                    <!-- Icon Box -->
                    <div class="bg-[#EBF3FA] w-[72px] h-[72px] rounded-3xl flex items-center justify-center text-[#0081C9] shadow-inner mt-4 z-10">
                        @if($index === 0)
                            <span class="text-3xl font-black text-[#0081C9]">&lt;/&gt;</span>
                        @else
                            @if($divisi['icon_type'] == 'stroke')
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">{!! $divisi['icon'] !!}</svg>
                            @else
                            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">{!! $divisi['icon'] !!}</svg>
                            @endif
                        @endif
                    </div>
                    
                    <!-- Title -->
                    <div class="flex-grow flex items-center justify-center z-10 w-full text-center mt-2 h-8">
                        @if($divisi['nama'] !== '')
                            <h3 class="text-[#E2F1FF] font-black text-xl tracking-wider uppercase drop-shadow-md">{{ $divisi['nama'] }}</h3>
                        @endif
                    </div>

                    <!-- Button -->
                    <a href="#proker-{{ Str::slug($divisi['nama'] ?: 'litbang') }}" class="z-10 bg-transparent border-[1.5px] border-white/50 hover:bg-white/10 hover:border-white text-white text-[11px] font-bold px-4 py-1.5 rounded-full flex items-center gap-1.5 transition-all">
                        Lihat Proker 
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
                @endforeach
            </div>

            <!-- Program Kerja Tiap Divisi Badge -->
            <div class="bg-[#003891] text-white font-extrabold px-12 py-4 rounded-full text-xl shadow-[0_10px_20px_rgba(0,56,145,0.3)] hover:scale-105 transition-transform duration-300 mt-2 z-20">
                Program Kerja Tiap Divisi
            </div>
            
        </section>

        <!-- ================= CAROUSEL PROGRAM KERJA ================= -->
        @php
            $proker_data = [
                'LITBANG' => [
                    [
                        'image' => 'assets/images/profile-1.png',
                        'title' => 'Workshop Web Development',
                        'desc' => 'Belajar Pengembangan web mulai dari dasarhingga pro',
                        'date' => '16 Juni 2026',
                        'loc' => 'RKBF 2004',
                        'quota' => '60 Peserta'
                    ],
                    [
                        'image' => 'assets/images/profile-3.png',
                        'title' => 'Hackathon ITC Code Fest',
                        'desc' => 'Kompetisi coding 24 jam untuk membangun produk inovatif',
                        'date' => '20 Juli 2026',
                        'loc' => 'Lab Komputer 1',
                        'quota' => '40 Peserta'
                    ],
                    [
                        'image' => 'assets/images/profile-2.png',
                        'title' => 'Tech Talk AI & Cloud',
                        'desc' => 'Seminar seputar perkembangan AI modern dan teknologi cloud',
                        'date' => '10 Agustus 2026',
                        'loc' => 'Audit Lt.3',
                        'quota' => '100 Peserta'
                    ],
                    [
                        'image' => 'assets/images/profile-1.png',
                        'title' => 'Riset & Software Expo',
                        'desc' => 'Pameran karya riset dan prototype dari anggota divisi Litbang',
                        'date' => '15 September 2026',
                        'loc' => 'Hall Gedung F',
                        'quota' => '80 Peserta'
                    ],
                    [
                        'image' => 'assets/images/profile-3.png',
                        'title' => 'Workshop Git & GitHub',
                        'desc' => 'Panduan lengkap version control dan kolaborasi tim',
                        'date' => '05 Oktober 2026',
                        'loc' => 'RKBF 2002',
                        'quota' => '50 Peserta'
                    ],
                    [
                        'image' => 'assets/images/profile-2.png',
                        'title' => 'Data Science Intro',
                        'desc' => 'Pengenalan analisis data dan machine learning dasar',
                        'date' => '12 November 2026',
                        'loc' => 'Lab Komputer 2',
                        'quota' => '45 Peserta'
                    ],
                ],
                'HUMAS' => [
                    [
                        'image' => 'assets/images/profile-2.png',
                        'title' => 'ITC Connect & Field Trip',
                        'desc' => 'Kunjungan relasi dan jejaring ke perusahaan teknologi nasional',
                        'date' => '12 Mei 2026',
                        'loc' => 'PT Telkom Indonesia',
                        'quota' => '45 Peserta'
                    ],
                    [
                        'image' => 'assets/images/profile-1.png',
                        'title' => 'Public Relations Gathering',
                        'desc' => 'Pertemuan silaturahmi dengan ormawa internal & eksternal kampus',
                        'date' => '25 Agustus 2026',
                        'loc' => 'Student Center',
                        'quota' => '50 Peserta'
                    ],
                    [
                        'image' => 'assets/images/profile-3.png',
                        'title' => 'Kunjungan Industri IT',
                        'desc' => 'Studi lapangan mengenai operasional industri perangkat lunak',
                        'date' => '05 Oktober 2026',
                        'loc' => 'Jakarta Tech Park',
                        'quota' => '60 Peserta'
                    ],
                    [
                        'image' => 'assets/images/profile-2.png',
                        'title' => 'Alumni Media Sharing',
                        'desc' => 'Sharing pengalaman karir bersama alumni pengurus ITC',
                        'date' => '18 November 2026',
                        'loc' => 'Aula Utama',
                        'quota' => '75 Peserta'
                    ],
                ],
                'P&K' => [
                    [
                        'image' => 'assets/images/profile-3.png',
                        'title' => 'Training Mobile App Dev',
                        'desc' => 'Pelatihan intensif pengembangan aplikasi Flutter & Android',
                        'date' => '05 Juli 2026',
                        'loc' => 'RKBF 2002',
                        'quota' => '50 Peserta'
                    ],
                    [
                        'image' => 'assets/images/profile-2.png',
                        'title' => 'Kelas Desain UI/UX & Figma',
                        'desc' => 'Menguasai konsep design system, wireframing, dan prototyping',
                        'date' => '18 September 2026',
                        'loc' => 'Lab Komputer 2',
                        'quota' => '40 Peserta'
                    ],
                    [
                        'image' => 'assets/images/profile-1.png',
                        'title' => 'Bootcamp Fullstack Web',
                        'desc' => 'Serial workshop fullstack Laravel & ReactJS untuk pemula',
                        'date' => '10 November 2026',
                        'loc' => 'Virtual / Zoom',
                        'quota' => '80 Peserta'
                    ],
                    [
                        'image' => 'assets/images/profile-3.png',
                        'title' => 'Cyber Security Basics',
                        'desc' => 'Pengenalan etika hacking, keamanan jaringan, dan proteksi data',
                        'date' => '02 Desember 2026',
                        'loc' => 'RKBF 2004',
                        'quota' => '55 Peserta'
                    ],
                ],
                'PSDM' => [
                    [
                        'image' => 'assets/images/profile-1.png',
                        'title' => 'Upgrading & Team Building',
                        'desc' => 'Kegiatan penguatan chemistry dan peningkatan kapasitas pengurus',
                        'date' => '10 April 2026',
                        'loc' => 'Coban Rondo',
                        'quota' => '70 Peserta'
                    ],
                    [
                        'image' => 'assets/images/profile-3.png',
                        'title' => 'LKMM Pra-TD ITC 2026',
                        'desc' => 'Pelatihan kepemimpinan dan manajemen organisasi bagi anggota',
                        'date' => '14 September 2026',
                        'loc' => 'Hall FT',
                        'quota' => '65 Peserta'
                    ],
                    [
                        'image' => 'assets/images/profile-2.png',
                        'title' => 'Evaluasi & Malam Keakraban',
                        'desc' => 'Forum apresiasi kinerja pengurus dan perayaan kebersamaan',
                        'date' => '20 Desember 2026',
                        'loc' => 'Villa Batu',
                        'quota' => '75 Peserta'
                    ],
                ],
                'INFOKOM' => [
                    [
                        'image' => 'assets/images/profile-2.png',
                        'title' => 'Workshop Motion Graphic',
                        'desc' => 'Pelatihan animasi 2D dan pembuatan konten visual kreatif',
                        'date' => '22 Juni 2026',
                        'loc' => 'RKBF 2005',
                        'quota' => '35 Peserta'
                    ],
                    [
                        'image' => 'assets/images/profile-1.png',
                        'title' => 'Digital Campaign Contest',
                        'desc' => 'Lomba karya poster & video Reels bertema edukasi teknologi',
                        'date' => '01 Oktober 2026',
                        'loc' => 'Online Instagram',
                        'quota' => '100 Peserta'
                    ],
                    [
                        'image' => 'assets/images/profile-3.png',
                        'title' => 'Content Creator Academy',
                        'desc' => 'Sharing session pengelolaan media sosial & branding organisasi',
                        'date' => '15 November 2026',
                        'loc' => 'Lab Multimedia',
                        'quota' => '45 Peserta'
                    ],
                ]
            ];
        @endphp

        <!-- Background / Container untuk Carousel (meniru style home) -->
        <div class="bg-[#EBF3FA] pb-12 relative shadow-inner overflow-hidden -mt-[30px] pt-[60px]">
            <!-- Component Alpine JS untuk Switch Divisi & Swipe Carousel Proker -->
            <div 
                x-data="{
                    activeDivisi: 'LITBANG',
                    selectDivisi(name) {
                        this.activeDivisi = name;
                        this.$nextTick(() => {
                            const el = document.getElementById('proker-carousel-' + name);
                            if (el) {
                                el.scrollTo({ left: 0, behavior: 'smooth' });
                            }
                        });
                    }
                }"
                class="relative z-10"
            >
                <!-- Tabs Navigasi Divisi di Bagian Atas -->
                <div class="max-w-[1320px] mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-center mb-6">
                        <div class="bg-white rounded-full p-2 shadow-[0_4px_16px_rgba(0,0,0,0.06)] inline-flex items-center gap-1 md:gap-2 overflow-x-auto max-w-full hide-scroll-bar">
                            @foreach(array_keys($proker_data) as $divName)
                                <button 
                                    @click="selectDivisi('{{ $divName }}')"
                                    :class="activeDivisi === '{{ $divName }}' 
                                        ? 'bg-gradient-to-r from-[#002054] to-[#0256DD] text-white font-black shadow-md' 
                                        : 'bg-transparent text-slate-900 font-extrabold hover:bg-slate-100'"
                                    class="px-6 md:px-8 py-2.5 text-sm rounded-full transition-all duration-300 whitespace-nowrap cursor-pointer"
                                >
                                    {{ $divName }}
                                </button>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Area Carousel dengan Gambar Background / Logo khusus pada Carousel -->
                <div class="relative w-full overflow-hidden">
                    <!-- Background Image / Logo khusus pada Carousel -->
                    <img 
                        src="{{ asset('assets/images/bacground-proker.png') }}" 
                        alt="Background Program Kerja Carousel" 
                        class="absolute inset-0 w-full h-full object-cover object-center pointer-events-none z-0 opacity-80" 
                    />

                    <!-- Horizontal Scroll Cards Carousel khusus Divisi Aktif (Tampil sampai ke ujung kanan screen) -->
                    @foreach($proker_data as $divName => $cards)
                        <div 
                            x-show="activeDivisi === '{{ $divName }}'"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-x-4"
                            x-transition:enter-end="opacity-100 translate-x-0"
                            id="proker-carousel-{{ $divName }}"
                            class="flex overflow-x-auto gap-6 pb-6 pt-4 pr-4 sm:pr-6 lg:pr-8 snap-x hide-scroll-bar w-full relative z-10 scroll-smooth"
                            style="padding-left: max(1.25rem, calc((100% - 1320px) / 2 + 2rem));"
                        >
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
                    @endforeach
                </div>

                <!-- Tombol Lihat Semua -->
                <div class="max-w-[1320px] mx-auto px-4 sm:px-6 lg:px-8 mt-10">
                    <div class="flex justify-center">
                        <a href="#" class="bg-[#0256DD] text-white px-9 py-3 rounded-full font-extrabold text-[15px] flex items-center gap-2.5 shadow-md hover:shadow-lg transition hover:bg-[#003891]">
                            Lihat Semua Program 
                        </a>
                    </div>
                </div>
            </div>
        </div>

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

        <!-- ================= DOKUMENTASI KEGIATAN SECTION ================= -->
        <section id="dokumentasi-kegiatan" class="relative z-20 max-w-[1320px] mx-auto px-4 sm:px-6 lg:px-8 py-12 flex flex-col items-center">
            <!-- Badge Title -->
            <div class="bg-[#003891] text-white font-extrabold px-10 py-3.5 rounded-full text-xl mb-8 shadow-[0_10px_20px_rgba(0,56,145,0.3)] hover:scale-105 transition-transform duration-300">
                Dokumentasi Kegiatan
            </div>

            <!-- Cards Container -->
            <div class="flex overflow-x-auto gap-6 pb-6 pt-4 px-4 snap-x hide-scroll-bar w-full md:justify-center justify-start">
                @php
                    $dok_divisi = [
                        ['name' => 'LITBANG', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />'],
                        ['name' => 'HUMAS', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/>'],
                        ['name' => 'P&K', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/>'],
                        ['name' => 'PSDM', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>'],
                        ['name' => 'INFOKOM', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/>'],
                    ];
                @endphp

                @foreach($dok_divisi as $index => $div)
                <!-- Card -->
                <div class="shrink-0 snap-start bg-white rounded-[32px] p-4 shadow-[0_10px_25px_rgba(0,0,0,0.08)] w-[240px] flex flex-col hover:-translate-y-2 transition-transform duration-300">
                    <!-- Header -->
                    <div class="flex items-center justify-center gap-2 mb-4 mt-2">
                        <div class="bg-[#EBF3FA] text-[#4285F4] w-8 h-8 rounded-full flex items-center justify-center font-bold">
                            @if($index === 0)
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">{!! $div['icon'] !!}</svg>
                            @else
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">{!! $div['icon'] !!}</svg>
                            @endif
                        </div>
                        <span class="text-[#4285F4] font-black text-[17px] tracking-wide uppercase" style="text-shadow: 1px 1px 2px rgba(66, 133, 244, 0.2);">{{ $div['name'] }}</span>
                    </div>
                    
                    <!-- Grid Images -->
                    <div class="grid grid-cols-2 gap-1.5 mb-5">
                        <div class="w-full h-[65px] bg-slate-200 rounded-lg overflow-hidden"><img src="{{ asset('assets/images/head-proker.png') }}" alt="Dokumentasi 1" class="w-full h-full object-cover"></div>
                        <div class="w-full h-[65px] bg-slate-200 rounded-lg overflow-hidden"><img src="{{ asset('assets/images/head-proker.png') }}" alt="Dokumentasi 2" class="w-full h-full object-cover"></div>
                        <div class="w-full h-[65px] bg-slate-200 rounded-lg overflow-hidden"><img src="{{ asset('assets/images/head-proker.png') }}" alt="Dokumentasi 3" class="w-full h-full object-cover"></div>
                        <div class="w-full h-[65px] bg-slate-200 rounded-lg overflow-hidden"><img src="{{ asset('assets/images/head-proker.png') }}" alt="Dokumentasi 4" class="w-full h-full object-cover"></div>
                    </div>

                    <!-- Button -->
                    <a href="#" class="w-max mx-auto px-8 bg-[#003891] hover:bg-[#002B73] text-white text-[12px] font-extrabold py-2 rounded-full text-center transition-colors shadow-md mt-auto mb-1">
                        Lihat Semua
                    </a>
                </div>
                @endforeach
            </div>
        </section>

        <!-- ================= AGENDA TERDEKAT SECTION ================= -->
        <section id="agenda-terdekat" class="relative z-20 max-w-[1320px] mx-auto px-4 sm:px-6 lg:px-8 pt-8 pb-12 flex flex-col items-center">
            <!-- Badge Title -->
            <div class="bg-[#003891] text-white font-extrabold px-12 py-3.5 rounded-full text-xl mb-10 shadow-[0_10px_20px_rgba(0,56,145,0.3)] hover:scale-105 transition-transform duration-300">
                Agenda Terdekat
            </div>

            <!-- Timeline Container -->
            <div class="relative w-full overflow-x-auto hide-scroll-bar py-4">
                <!-- Continuous Connecting Line -->
                <div class="absolute top-1/2 left-0 w-max min-w-full h-[1.5px] bg-[#93C5FD] -translate-y-1/2 z-0"></div>

                <div class="flex items-center gap-0 relative z-10 w-max px-4">
                    
                    @php
                        $agendas = [
                            ['divisi' => 'Litbang', 'div_icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>'],
                            ['divisi' => 'Humas', 'div_icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.516 0c.85.493 1.509 1.333 1.509 2.316V18" />'],
                            ['divisi' => 'P&K', 'div_icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />'],
                            ['divisi' => 'PSDM', 'div_icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />'],
                            ['divisi' => 'Infokom', 'div_icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38a2.25 2.25 0 01-3.12-.53l-2.25-3.181m10.355 5.093c1.378-.453 2.668-1.144 3.821-2.023m0 0a12.01 12.01 0 00-4.045-4.045m4.045 4.045c-2.046 2.046-4.908 3.32-8.045 3.32a11.956 11.956 0 01-6.84-2.127m0 0L3.14 18.84m3.7-2.127c-2.126-1.572-3.66-3.882-4.135-6.505M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />'],
                        ];
                    @endphp

                    @foreach($agendas as $index => $agenda)
                    <!-- Combined Item -->
                    <div class="flex items-center shrink-0">
                        <!-- Date Box -->
                        <div class="bg-[#003891] text-white rounded-[20px] w-[80px] h-[95px] flex flex-col items-center justify-center shadow-lg z-20">
                            <span class="text-[28px] font-black leading-none mt-1">20</span>
                            <span class="text-[13px] font-bold leading-tight">SEP</span>
                            <span class="text-[11px] font-semibold leading-tight mb-1">2026</span>
                        </div>
                        
                        <!-- Event Card -->
                        <div class="bg-white rounded-[20px] p-4 pl-7 w-[210px] h-[95px] flex flex-col justify-center shadow-[0_4px_15px_rgba(0,0,0,0.05)] border border-slate-50 z-10 -ml-5 relative">
                            <h4 class="font-extrabold text-[13px] text-slate-900 leading-tight mb-2 line-clamp-2">Workshop Web Development</h4>
                            <div class="flex flex-col gap-1.5">
                                <div class="flex items-center gap-1.5 text-[#0256DD] text-[10px] font-bold">
                                    <svg class="w-3.5 h-3.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">{!! $agenda['div_icon'] !!}</svg>
                                    {{ $agenda['divisi'] }}
                                </div>
                                <div class="flex items-center gap-1.5 text-slate-500 text-[10px] font-semibold">
                                    <svg class="w-3.5 h-3.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    Rektorat Lt 10
                                </div>
                            </div>
                        </div>

                        <!-- Connector Dot (Only if not last) -->
                        @if($index < 4)
                        <div class="w-12 md:w-20 flex items-center justify-center shrink-0">
                            <div class="w-3 h-3 bg-white border-2 border-[#0256DD] rounded-full z-10"></div>
                        </div>
                        @endif
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </section>

        <!-- ================= FADE TO FOOTER GRADIENT ================= -->
        <div class="w-full h-32 bg-gradient-to-b from-transparent to-[#0f172a] relative z-10 pointer-events-none -mb-10 mt-4"></div>

    </div>

    <x-footer />
@endsection
