@extends('layouts.app')

@section('title', 'Program Kerja — UKMFT-ITC')

@section('content')
    <div class="relative min-h-screen bg-[#F8FAFC]">

        {{-- Navbar Header --}}
        <x-navbar />

        <!-- ================= HERO / TOP SECTION ================= -->
        <section
            class="relative pt-36 pb-16 px-4 sm:px-6 lg:px-8 max-w-[1320px] mx-auto min-h-[600px] flex flex-col md:flex-row items-center justify-between gap-10">

            <!-- Dekorasi Dot Pattern Kiri -->
            <div
                class="absolute left-0 top-1/3 -translate-y-1/2 flex gap-2 z-0 opacity-40 pointer-events-none">

                <div class="flex flex-col gap-2">
                    @for($i = 0; $i < 5; $i++)
                        <div class="w-1.5 h-1.5 rounded-full bg-blue-400"></div>
                    @endfor
                </div>

                <div class="flex flex-col gap-2 mt-4">
                    @for($i = 0; $i < 5; $i++)
                        <div class="w-1.5 h-1.5 rounded-full bg-blue-400"></div>
                    @endfor
                </div>

                <div class="flex flex-col gap-2">
                    @for($i = 0; $i < 5; $i++)
                        <div class="w-1.5 h-1.5 rounded-full bg-blue-400"></div>
                    @endfor
                </div>

            </div>

            <!-- Left Content -->
            <div
                class="relative z-10 w-full md:w-1/2 flex flex-col items-start text-left pt-10 md:pt-0 pl-10 md:pl-20">

                <h1
                    class="text-5xl sm:text-6xl md:text-7xl font-black text-black tracking-tight mb-10 drop-shadow-[0_4px_8px_rgba(0,0,0,0.1)] uppercase">
                    PROGRAM KERJA
                </h1>

                <div class="flex flex-wrap items-center gap-4 mb-6">

                    <a
                        href="{{ url('/view-proker') }}"
                        class="inline-flex items-center gap-3 bg-[#003891] text-white text-base font-bold px-8 py-3.5 rounded-full shadow-[0_8px_20px_rgba(0,56,145,0.4)] hover:shadow-xl hover:-translate-y-1 transition-all duration-300">

                        Lihat Proker

                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>

                    </a>

                    <a
                        href="{{ url('/view-dokumentasi') }}"
                        class="inline-flex items-center justify-center bg-white border border-[#003891]/20 text-[#003891] text-base font-bold px-8 py-3.5 rounded-full shadow-[0_4px_12px_rgba(0,56,145,0.08)] hover:shadow-md hover:-translate-y-1 transition-all duration-300">

                        Lihat Dokumentasi

                    </a>

                </div>
            </div>

            <!-- Right Content -->
            <div class="relative z-10 w-full md:w-1/2 flex justify-end">

                <div
                    class="relative w-full max-w-[623px] h-auto rounded-[40px] overflow-hidden drop-shadow-[0_20px_40px_rgba(0,56,145,0.15)]">

                    <img
                        src="{{ asset('assets/images/profile-1.jpg') }}"
                        alt="Program Kerja Header"
                        class="w-full h-auto object-contain">

                </div>

            </div>

        </section>


        <!-- Dekorasi Background Bawah Kiri -->
        <div
            class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-[#CEDFFF] rounded-tr-full opacity-60 z-0 pointer-events-none">
        </div>


        <!-- ================= STATS CARDS SECTION ================= -->

        @php
            // Jumlah divisi dari database
            $jumlahDivisi = $proker_data->count();

            // Jumlah seluruh program kerja
            $jumlahProker = $proker_data->flatten()->count();

            // Jumlah peserta dari seluruh proker
            $jumlahPeserta = $proker_data->flatten()->sum('peserta');

            // Jumlah dokumentasi/foto proker
            $jumlahDokumentasi = $proker_data->flatten()->filter(function ($item) {
                return !empty($item->foto) && $item->foto !== 'belumada';
            })->count();
            
        @endphp

        <section
            class="relative z-20 max-w-[1320px] mx-auto px-4 sm:px-6 lg:px-8 -mt-8 pb-12">

            <div class="flex flex-wrap justify-center gap-4 sm:gap-6 lg:gap-8">

                <!-- Stat 1 -->
                <div
                    class="bg-white/95 backdrop-blur rounded-[24px] px-6 py-4 flex items-center gap-4 shadow-[0_10px_30px_rgba(0,56,145,0.08)] border border-white/50 w-full sm:w-auto">

                    <div
                        class="bg-[#003891] w-12 h-12 rounded-xl flex items-center justify-center text-white shrink-0 shadow-inner">

                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                        </svg>

                    </div>

                    <div class="flex flex-col text-left">
                        <span
                            class="text-2xl font-black text-[#4682B4] leading-none mb-1">
                            {{ $jumlahDivisi }}
                        </span>

                        <span
                            class="text-[11px] font-bold text-slate-800 leading-tight">
                            Divisi<br>Aktif
                        </span>
                    </div>

                </div>


                <!-- Stat 2 -->
                <div
                    class="bg-white/95 backdrop-blur rounded-[24px] px-6 py-4 flex items-center gap-4 shadow-[0_10px_30px_rgba(0,56,145,0.08)] border border-white/50 w-full sm:w-auto">

                    <div
                        class="bg-[#003891] w-12 h-12 rounded-xl flex items-center justify-center text-white shrink-0 shadow-inner">

                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                            stroke-width="2.5" viewBox="0 0 24 24">

                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />

                        </svg>

                    </div>

                    <div class="flex flex-col text-left">

                        <span
                            class="text-2xl font-black text-[#4682B4] leading-none mb-1">
                            {{ $jumlahProker }}
                        </span>

                        <span
                            class="text-[11px] font-bold text-slate-800 leading-tight">
                            Program Kerja<br>Tersedia
                        </span>

                    </div>

                </div>


                <!-- Stat 3 -->
                <div
                    class="bg-white/95 backdrop-blur rounded-[24px] px-6 py-4 flex items-center gap-4 shadow-[0_10px_30px_rgba(0,56,145,0.08)] border border-white/50 w-full sm:w-auto">

                    <div
                        class="bg-[#003891] w-12 h-12 rounded-xl flex items-center justify-center text-white shrink-0 shadow-inner">

                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                            stroke-width="2.5" viewBox="0 0 24 24">

                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />

                        </svg>

                    </div>

                    <div class="flex flex-col text-left">

                        <span
                            class="text-2xl font-black text-[#4682B4] leading-none mb-1">
                            {{ $jumlahProker }}
                        </span>

                        <span
                            class="text-[11px] font-bold text-slate-800 leading-tight">
                            Kegiatan<br>Terjadwal
                        </span>

                    </div>

                </div>


                <!-- Stat 4 -->
                <div
                    class="bg-white/95 backdrop-blur rounded-[24px] px-6 py-4 flex items-center gap-4 shadow-[0_10px_30px_rgba(0,56,145,0.08)] border border-white/50 w-full sm:w-auto">

                    <div
                        class="bg-[#003891] w-12 h-12 rounded-xl flex items-center justify-center text-white shrink-0 shadow-inner">

                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">

                            <path
                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />

                        </svg>

                    </div>

                    <div class="flex flex-col text-left">

                        <span
                            class="text-2xl font-black text-[#4682B4] leading-none mb-1">
                            {{ $jumlahPeserta }}
                        </span>

                        <span
                            class="text-[11px] font-bold text-slate-800 leading-tight">
                            Total Peserta<br>Proker
                        </span>

                    </div>

                </div>


                <!-- Stat 5 -->
                <div
                    class="bg-white/95 backdrop-blur rounded-[24px] px-6 py-4 flex items-center gap-4 shadow-[0_10px_30px_rgba(0,56,145,0.08)] border border-white/50 w-full sm:w-auto">

                    <div
                        class="bg-[#003891] w-12 h-12 rounded-xl flex items-center justify-center text-white shrink-0 shadow-inner">

                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                            stroke-width="2.5" viewBox="0 0 24 24">

                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />

                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />

                        </svg>

                    </div>

                    <div class="flex flex-col text-left">

                        <span
                            class="text-2xl font-black text-[#4682B4] leading-none mb-1">
                            {{ $jumlahDokumentasi }}
                        </span>

                        <span
                            class="text-[11px] font-bold text-slate-800 leading-tight">
                            Dokumentasi<br>Kegiatan
                        </span>

                    </div>

                </div>

            </div>

        </section>


        <!-- ================= PILIH DIVISI ================= -->

        <section
            id="daftar-proker"
            class="relative z-20 max-w-[1320px] mx-auto px-4 sm:px-6 lg:px-8 py-10 flex flex-col items-center">

            <div
                class="bg-[#003891] text-white font-extrabold px-12 py-3.5 rounded-full text-xl mb-10 shadow-[0_10px_20px_rgba(0,56,145,0.3)]">
                Pilih Divisi
            </div>


            <!-- Divisi Cards -->
            <div
                class="flex flex-wrap justify-center gap-6 md:gap-8 mb-10 w-full">

                @foreach($proker_data as $namaDivisi => $daftarProker)

                    @php
                        $slugDivisi = Str::slug($namaDivisi);
                    @endphp

                    <div
                        class="relative w-[190px] h-[220px] rounded-[32px] p-5 flex flex-col items-center justify-between overflow-hidden shadow-[0_15px_30px_rgba(0,0,0,0.15)] hover:-translate-y-2 transition-transform duration-300"
                        style="background: linear-gradient(180deg, #008DD5 0%, #011429 100%);">

                        <!-- Decoration Circle -->
                        <div
                            class="absolute -right-10 top-1/2 -translate-y-1/2 w-28 h-28 rounded-full bg-white/10 blur-[1px]">
                        </div>


                        <!-- Icon Box -->
                        <div
                            class="bg-[#EBF3FA] w-[72px] h-[72px] rounded-3xl flex items-center justify-center text-[#0081C9] shadow-inner mt-4 z-10">

                            <span class="text-3xl font-black text-[#0081C9]">
                                &lt;/&gt;
                            </span>

                        </div>


                        <!-- Title -->
                        <div
                            class="flex-grow flex items-center justify-center z-10 w-full text-center mt-2 h-8">

                            <h3
                                class="text-[#E2F1FF] font-black text-xl tracking-wider uppercase drop-shadow-md">

                                {{ $namaDivisi }}

                            </h3>

                        </div>


                        <!-- Button -->
                        <a
                            href="{{ url('/view-proker') }}"
                            class="z-10 bg-transparent border-[1.5px] border-white/50 hover:bg-white/10 hover:border-white text-white text-[11px] font-bold px-4 py-1.5 rounded-full flex items-center gap-1.5 transition-all">

                            Lihat Proker

                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor"
                                stroke-width="3" viewBox="0 0 24 24">

                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />

                            </svg>

                        </a>

                    </div>

                @endforeach

            </div>


            <!-- Badge -->
            <div
                class="bg-[#003891] text-white font-extrabold px-12 py-4 rounded-full text-xl shadow-[0_10px_20px_rgba(0,56,145,0.3)] mt-2 z-20">

                Program Kerja Tiap Divisi

            </div>

        </section>


        <!-- ================= CAROUSEL PROGRAM KERJA ================= -->

        <div
            class="bg-[#EBF3FA] pb-12 relative shadow-inner overflow-hidden -mt-[30px] pt-[60px]">

            <div
                x-data="{
                    activeDivisi: '{{ $proker_data->keys()->first() }}',

                    selectDivisi(name) {
                        this.activeDivisi = name;

                        this.$nextTick(() => {
                            const el = document.getElementById('proker-carousel-' + name);

                            if (el) {
                                el.scrollTo({
                                    left: 0,
                                    behavior: 'smooth'
                                });
                            }
                        });
                    }
                }"
                class="relative z-10">


                <!-- Tabs -->
                <div class="max-w-[1320px] mx-auto px-4 sm:px-6 lg:px-8">

                    <div class="flex justify-center mb-6">

                        <div
                            class="bg-white rounded-full p-2 shadow-[0_4px_16px_rgba(0,0,0,0.06)] inline-flex items-center gap-1 md:gap-2 overflow-x-auto max-w-full hide-scroll-bar">

                            @foreach($proker_data as $namaDivisi => $daftarProker)

                                <button
                                    @click="selectDivisi('{{ $namaDivisi }}')"
                                    :class="activeDivisi === '{{ $namaDivisi }}'
                                        ? 'bg-gradient-to-r from-[#002054] to-[#0256DD] text-white font-black shadow-md'
                                        : 'bg-transparent text-slate-900 font-extrabold hover:bg-slate-100'"
                                    class="px-6 md:px-8 py-2.5 text-sm rounded-full transition-all duration-300 whitespace-nowrap cursor-pointer">

                                    {{ $namaDivisi }}

                                </button>

                            @endforeach

                        </div>

                    </div>

                </div>


                <!-- Area Carousel -->
                <div class="relative w-full overflow-hidden">

                    <img
                        src="{{ asset('assets/images/bacground-proker.png') }}"
                        alt="Background Program Kerja Carousel"
                        class="absolute inset-0 w-full h-full object-cover object-center pointer-events-none z-0 opacity-80">


                    @foreach($proker_data as $namaDivisi => $daftarProker)

                        @php
                            $slugDivisi = Str::slug($namaDivisi);
                        @endphp

                        <div
                            x-show="activeDivisi === '{{ $namaDivisi }}'"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-x-4"
                            x-transition:enter-end="opacity-100 translate-x-0"
                            id="proker-carousel-{{ $namaDivisi }}"
                            class="flex overflow-x-auto gap-6 pb-6 pt-4 pr-4 sm:pr-6 lg:pr-8 snap-x hide-scroll-bar w-full relative z-10 scroll-smooth"
                            style="padding-left: max(1.25rem, calc((100% - 1320px) / 2 + 2rem));">


                            @forelse($daftarProker as $proker)

                                <div
                                    id="proker-{{ $slugDivisi }}"
                                    class="bg-white rounded-[22px] shadow-[0_10px_25px_rgba(0,0,0,0.07)] overflow-hidden min-w-[275px] w-[275px] flex-shrink-0 snap-start flex flex-col border border-slate-100 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl">


                                    <!-- Image -->
                                    <div class="h-44 w-full bg-slate-100 overflow-hidden">

                                        <img
                                            src="{{ asset('assets/images/proker/' . $proker->foto) . '.webp'}}"
                                            alt="{{ $proker->nama }}"
                                            class="w-full h-full object-cover object-center">

                                    </div>


                                    <!-- Content -->
                                    <div class="p-5 flex flex-col flex-grow">

                                        <h3
                                            class="text-[#0256DD] font-extrabold text-[19px] leading-snug mb-2">

                                            {{ $proker->nama }}

                                        </h3>


                                        <p
                                            class="text-[13px] font-bold text-slate-900 mb-5 leading-tight">

                                            {{ $proker->deskripsi }}

                                        </p>


                                        <!-- Details -->
                                        <div
                                            class="space-y-2.5 mb-6 text-[13px] font-bold text-slate-800">


                                            <!-- Tanggal -->
                                            <div class="flex items-center gap-2.5">

                                                <svg
                                                    class="w-4 h-4 text-slate-600 shrink-0"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    viewBox="0 0 24 24">

                                                    <rect x="3" y="4" width="18"
                                                        height="18" rx="2" ry="2">
                                                    </rect>

                                                    <line x1="16" y1="2" x2="16"
                                                        y2="6"></line>

                                                    <line x1="8" y1="2" x2="8"
                                                        y2="6"></line>

                                                    <line x1="3" y1="10" x2="21"
                                                        y2="10"></line>

                                                </svg>

                                                {{ \Carbon\Carbon::parse($proker->tanggal_berlangsung)->translatedFormat('d M Y') }}

                                            </div>


                                            <!-- Lokasi -->
                                            <div class="flex items-center gap-2.5">

                                                <svg
                                                    class="w-4 h-4 text-slate-600 shrink-0"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    viewBox="0 0 24 24">

                                                    <path
                                                        d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z">
                                                    </path>

                                                    <circle cx="12" cy="10"
                                                        r="3"></circle>

                                                </svg>

                                                {{ $proker->lokasi }}
                                            </div>

                                            <!-- Peserta -->
                                            <div class="flex items-center gap-2.5">
                                                <svg
                                                    class="w-4 h-4 text-slate-600 shrink-0"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2">
                                                    </path>
                                                    <circle cx="9" cy="7"
                                                        r="4"></circle>
                                                    <path
                                                        d="M23 21v-2a4 4 0 00-3-3.87">
                                                    </path>
                                                    <path
                                                        d="M16 3.13a4 4 0 010 7.75">
                                                    </path>
                                                </svg>
                                                {{ $proker->peserta }} Peserta
                                            </div>
                                        </div>

                                        <!-- CTA -->
                                        <div class="mt-auto">
                                            <a
                                                href="{{ route('detail-proker', $proker->id) }}"
                                                class="inline-block bg-gradient-to-r from-[#002054] to-[#0256DD] text-white text-[13px] font-bold px-6 py-2.5 rounded-full shadow-sm hover:opacity-90 transition">
                                                Selengkapnya
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div
                                    class="bg-white rounded-[22px] p-8 text-center shadow-md">
                                    <p class="text-slate-500 font-bold">
                                        Belum ada program kerja untuk divisi ini.
                                    </p>
                                </div>
                            @endforelse
                        </div>
                    @endforeach
                </div>

                <!-- Lihat Semua -->
                <div
                    class="max-w-[1320px] mx-auto px-4 sm:px-6 lg:px-8 mt-10">
                    <div class="flex justify-center">
                        <a
                            href="{{ url('/view-proker') }}"
                            class="bg-[#0256DD] text-white px-9 py-3 rounded-full font-extrabold text-[15px] flex items-center gap-2.5 shadow-md hover:shadow-lg transition hover:bg-[#003891]">
                            Lihat Semua Program
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <style>
            .hide-scroll-bar {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }

            .hide-scroll-bar::-webkit-scrollbar {
                display: none;
            }
        </style>


        <!-- ================= DOKUMENTASI KEGIATAN ================= -->

        <section
            id="dokumentasi-kegiatan"
            class="relative z-20 max-w-[1320px] mx-auto px-4 sm:px-6 lg:px-8 py-12 flex flex-col items-center">
            <div
                class="bg-[#003891] text-white font-extrabold px-10 py-3.5 rounded-full text-xl mb-8 shadow-[0_10px_20px_rgba(0,56,145,0.3)]">
                Dokumentasi Kegiatan
            </div>
            <div
                class="flex overflow-x-auto gap-6 pb-6 pt-4 px-4 snap-x hide-scroll-bar w-full md:justify-center justify-start">
                @foreach($proker_data as $namaDivisi => $daftarProker)
                    <div
                        class="shrink-0 snap-start bg-white rounded-[32px] p-4 shadow-[0_10px_25px_rgba(0,0,0,0.08)] w-[240px] flex flex-col hover:-translate-y-2 transition-transform duration-300">

                        <!-- Header -->
                        <div
                            class="flex items-center justify-center gap-2 mb-4 mt-2">
                            <div
                                class="bg-[#EBF3FA] text-[#4285F4] w-8 h-8 rounded-full flex items-center justify-center font-bold">
                                <span class="text-sm">
                                    &lt;/&gt;
                                </span>
                            </div>
                            <span
                                class="text-[#4285F4] font-black text-[17px] tracking-wide uppercase">
                                {{ $namaDivisi }}
                            </span>
                        </div>

                        <!-- Grid Images -->
                        <div class="grid grid-cols-2 gap-1.5 mb-5">
                            @foreach($daftarProker->take(4) as $proker)
                                <div
                                    class="w-full h-[65px] bg-slate-200 rounded-lg overflow-hidden">
                                    <img
                                        src="{{ asset('assets/images/proker/' . $proker->foto) . '.webp'}}"
                                        alt="{{ $proker->nama }}"
                                        class="w-full h-full object-cover">
                                </div>
                            @endforeach

                            {{-- Kalau prokernya kurang dari 4 --}}
                            @for($i = $daftarProker->count(); $i < 4; $i++)
                                <div
                                    class="w-full h-[65px] bg-slate-100 rounded-lg">
                                </div>
                            @endfor
                        </div>

                        <!-- Button -->
                        <a
                            href="{{ url('/view-dokumentasi') }}"
                            class="w-max mx-auto px-8 bg-[#003891] hover:bg-[#002B73] text-white text-[12px] font-extrabold py-2 rounded-full text-center transition-colors shadow-md mt-auto mb-1">
                            Lihat Semua
                        </a>
                    </div>
                @endforeach
            </div>
        </section>


        <!-- ================= AGENDA TERDEKAT ================= -->

        @php
            use Carbon\Carbon;

            // Ambil semua proker dari seluruh divisi
            $semuaProker = $proker_data->flatten();

            // Tanggal hari ini
            $hariIni = Carbon::today();

            /*
            |--------------------------------------------------------------------------
            | 1. CARI 4 AGENDA TERDEKAT
            |--------------------------------------------------------------------------
            |
            | Ambil agenda yang tanggal berlangsungnya:
            | - Sama dengan atau setelah hari ini
            | - Berada di tahun berjalan
            |
            */
            $agendaTerdekat = $semuaProker
                ->filter(function ($proker) use ($hariIni) {
                    $tanggalProker = Carbon::parse($proker->tanggal_berlangsung);

                    return $tanggalProker->greaterThanOrEqualTo($hariIni)
                        && $tanggalProker->year === $hariIni->year;
                })
                ->sortBy(function ($proker) {
                    return $proker->tanggal_berlangsung;
                })
                ->take(4);


            /*
            |--------------------------------------------------------------------------
            | 2. JIKA TIDAK ADA AGENDA DI TAHUN BERJALAN
            |--------------------------------------------------------------------------
            |
            | Misalnya:
            | Hari ini = 10 Januari 2027
            |
            | Tidak ada agenda 2027.
            |
            | Maka ambil 4 agenda TERAKHIR di tahun 2026.
            |
            */
            if ($agendaTerdekat->isEmpty()) {

                $tahunSebelumnya = $hariIni->year - 1;

                $agendaTerdekat = $semuaProker
                    ->filter(function ($proker) use ($tahunSebelumnya) {
                        $tanggalProker = Carbon::parse($proker->tanggal_berlangsung);

                        return $tanggalProker->year === $tahunSebelumnya;
                    })
                    ->sortByDesc(function ($proker) {
                        return $proker->tanggal_berlangsung;
                    })
                    ->take(4)
                    ->sortBy(function ($proker) {
                        return $proker->tanggal_berlangsung;
                    });
            }
        @endphp

        <section
            id="agenda-terdekat"
            class="relative z-20 max-w-[1320px] mx-auto px-4 sm:px-6 lg:px-8 pt-8 pb-12 flex flex-col items-center">
            <div
                class="bg-[#003891] text-white font-extrabold px-12 py-3.5 rounded-full text-xl mb-10 shadow-[0_10px_20px_rgba(0,56,145,0.3)]">
                Agenda Terdekat
            </div>


            <!-- Timeline -->
            <div
                class="relative w-full overflow-x-auto hide-scroll-bar py-4">
                <div
                    class="absolute top-1/2 left-0 w-max min-w-full h-[1.5px] bg-[#93C5FD] -translate-y-1/2 z-0">
                </div>
                <div
                    class="flex items-center gap-0 relative z-10 w-max px-4">

                    @forelse($agendaTerdekat as $index => $proker)
                        <div class="flex items-center shrink-0">

                            <!-- Date Box -->
                            <div
                                class="bg-[#003891] text-white rounded-[20px] w-[80px] h-[95px] flex flex-col items-center justify-center shadow-lg z-20">
                                <span
                                    class="text-[28px] font-black leading-none mt-1">
                                    {{ \Carbon\Carbon::parse($proker->tanggal_berlangsung)->format('d') }}
                                </span>
                                <span
                                    class="text-[13px] font-bold leading-tight">
                                    {{ strtoupper(\Carbon\Carbon::parse($proker->tanggal_berlangsung)->translatedFormat('M')) }}
                                </span>
                                <span
                                    class="text-[11px] font-semibold leading-tight mb-1">
                                    {{ \Carbon\Carbon::parse($proker->tanggal_berlangsung)->format('Y') }}
                                </span>
                            </div>

                            <!-- Event Card -->
                            <div
                                class="bg-white rounded-[20px] p-4 pl-7 w-[210px] h-[95px] flex flex-col justify-center shadow-[0_4px_15px_rgba(0,0,0,0.05)] border border-slate-50 z-10 -ml-5 relative">
                                <h4
                                    class="font-extrabold text-[13px] text-slate-900 leading-tight mb-2 line-clamp-2">
                                    {{ $proker->nama }}
                                </h4>
                                <div class="flex flex-col gap-1.5">

                                    <!-- Divisi -->
                                    <div
                                        class="flex items-center gap-1.5 text-[#0256DD] text-[10px] font-bold">
                                        <svg
                                            class="w-3.5 h-3.5 shrink-0"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                        </svg>
                                        {{ $proker->divisi->nama_divisi }}
                                    </div>

                                    <!-- Lokasi -->
                                    <div
                                        class="flex items-center gap-1.5 text-slate-500 text-[10px] font-semibold">
                                        <svg
                                            class="w-3.5 h-3.5 shrink-0"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        {{ $proker->lokasi }}
                                    </div>
                                </div>
                            </div>

                            <!-- Connector -->
                            @if($index < $agendaTerdekat->count() - 1)
                                <div
                                    class="w-12 md:w-20 flex items-center justify-center shrink-0">
                                    <div
                                        class="w-3 h-3 bg-white border-2 border-[#0256DD] rounded-full z-10">
                                    </div>
                                </div>
                            @endif
                        </div>
                    @empty
                        <div
                            class="bg-white rounded-[20px] px-8 py-5 shadow-md">
                            <p class="text-slate-500 font-bold">
                                Belum ada agenda program kerja.
                            </p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>


        <!-- ================= FADE TO FOOTER ================= -->

        <div
            class="w-full h-32 bg-gradient-to-b from-transparent to-[#0f172a] relative z-10 pointer-events-none -mb-10 mt-4">
        </div>

    </div>


    <x-footer />

@endsection