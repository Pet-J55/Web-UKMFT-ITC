@extends('layouts.app')

@section('title', 'Penugasan Infinite — UKMFT-ITC')

@section('content')
<div class="relative overflow-x-hidden min-h-screen" style="background: #020b1e;">

    {{-- ===== NAVBAR ===== --}}
    <x-navbar />

    {{-- ===== HERO SECTION ===== --}}
    <section id="beranda" class="relative min-h-screen flex items-center overflow-hidden" style="padding-top: 80px;">

        {{-- Background Image --}}
        <img
            src="{{ asset('assets/images/bacground-infinite.png') }}"
            alt="Background Infinite"
            class="absolute inset-0 w-full h-full object-cover object-center pointer-events-none"
            style="z-index: 0;"
        />

        {{-- Dark gradient overlay --}}
        <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(2,11,40,0.72) 0%, rgba(4,20,65,0.55) 50%, rgba(2,11,40,0.68) 100%); z-index: 1;"></div>

        {{-- Glowing orb left --}}
        <div class="absolute pointer-events-none" style="left: -120px; top: 30%; width: 500px; height: 500px; border-radius: 50%; background: radial-gradient(circle, rgba(37,99,235,0.25) 0%, transparent 70%); z-index: 1;"></div>

        {{-- Glowing orb right --}}
        <div class="absolute pointer-events-none" style="right: -80px; top: 20%; width: 420px; height: 420px; border-radius: 50%; background: radial-gradient(circle, rgba(14,165,233,0.18) 0%, transparent 70%); z-index: 1;"></div>

        {{-- Hero Content --}}
        <div class="relative w-full max-w-[1320px] mx-auto px-6 sm:px-10 lg:px-16 flex flex-col lg:flex-row items-center justify-between gap-10 py-20" style="z-index: 10;">

            {{-- LEFT: TEXT --}}
            <div class="flex-1 min-w-0">
                {{-- Badge --}}
                <div class="inline-flex items-center gap-2 mb-5 px-4 py-1.5 rounded-full border"
                    style="background: rgba(37,99,235,0.18); border-color: rgba(96,165,250,0.4);">
                    <span style="width:8px; height:8px; border-radius:50%; background:#38bdf8; display:inline-block; box-shadow: 0 0 8px #38bdf8;"></span>
                    <span class="text-xs font-bold tracking-widest uppercase" style="color: #93c5fd; letter-spacing: 0.12em;">Penugasan Infinite</span>
                </div>

                {{-- Main Headline --}}
                <h1 class="font-black leading-[1.08] mb-6"
                    style="font-size: clamp(2.5rem, 6vw, 4.5rem); color: #fff; text-shadow: 0 4px 32px rgba(2,86,221,0.5);">
                    Kerjakan<br>
                    Lakukan<br>
                    <span style="background: linear-gradient(90deg, #60a5fa 0%, #38bdf8 50%, #a5b4fc 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Berkembang</span>
                </h1>

                {{-- Subtitle --}}
                <p class="mb-8 font-medium leading-relaxed" style="max-width: 480px; font-size: clamp(0.85rem, 1.5vw, 1rem); color: rgba(219,234,254,0.85);">
                    Seluruh penugasan yang diberikan panitia dapat
                    diakses melalui halaman ini dalam format PDF.
                    Semangat dalam menjalani hidup yaa
                </p>

                {{-- CTA Button --}}
                <a
                    href="#daftar-penugasan"
                    class="inline-flex items-center gap-3 font-extrabold rounded-full transition-all duration-300 hover:scale-105"
                    style="background: linear-gradient(135deg, #0c408b, #0765df); color: #fff; padding: 14px 36px; font-size: 1rem; box-shadow: 0 8px 28px rgba(7,101,223,0.5); border: 1px solid rgba(96,165,250,0.3);"
                >
                    Lihat Penugasan
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5"/>
                    </svg>
                </a>
            </div>

            {{-- RIGHT: PDF 3D Illustration --}}
            <div class="flex-shrink-0 flex items-center justify-center lg:justify-end" style="flex-basis: 420px;">
                <div class="relative flex items-center justify-center" style="width: 100%; max-width: 420px;">

                    {{-- Glowing rings --}}
                    <div class="absolute" style="width: 360px; height: 360px; border-radius: 50%; border: 2px solid rgba(56,189,248,0.25); box-shadow: 0 0 60px rgba(56,189,248,0.15); left: 50%; top: 50%; transform: translate(-50%,-50%);"></div>
                    <div class="absolute" style="width: 290px; height: 290px; border-radius: 50%; border: 1.5px solid rgba(96,165,250,0.2); left: 50%; top: 50%; transform: translate(-50%,-50%);"></div>

                    {{-- Floating document icons --}}
                    <div class="absolute animate-bounce" style="top: 12%; left: 6%; animation-duration: 3.2s;">
                        <div style="width: 52px; height: 64px; background: linear-gradient(145deg, #1e4da1, #0a2e7a); border-radius: 10px 10px 10px 2px; box-shadow: 0 8px 24px rgba(0,0,0,0.4); display: flex; flex-direction: column; align-items: center; justify-content: center; border: 1px solid rgba(96,165,250,0.3);">
                            <div style="width: 28px; height: 3px; background: rgba(96,165,250,0.6); border-radius: 2px; margin-bottom: 4px;"></div>
                            <div style="width: 22px; height: 3px; background: rgba(96,165,250,0.4); border-radius: 2px; margin-bottom: 4px;"></div>
                            <div style="width: 18px; height: 3px; background: rgba(96,165,250,0.3); border-radius: 2px;"></div>
                        </div>
                    </div>
                    <div class="absolute animate-bounce" style="top: 10%; right: 4%; animation-duration: 2.8s; animation-delay: 0.5s;">
                        <div style="width: 44px; height: 54px; background: linear-gradient(145deg, #1e4da1, #0a2e7a); border-radius: 8px 8px 8px 2px; box-shadow: 0 6px 18px rgba(0,0,0,0.4); display: flex; flex-direction: column; align-items: center; justify-content: center; border: 1px solid rgba(96,165,250,0.3);">
                            <div style="width: 22px; height: 2.5px; background: rgba(96,165,250,0.6); border-radius: 2px; margin-bottom: 3px;"></div>
                            <div style="width: 18px; height: 2.5px; background: rgba(96,165,250,0.4); border-radius: 2px; margin-bottom: 3px;"></div>
                            <div style="width: 14px; height: 2.5px; background: rgba(96,165,250,0.3); border-radius: 2px;"></div>
                        </div>
                    </div>
                    <div class="absolute animate-bounce" style="bottom: 20%; right: 5%; animation-duration: 3.5s; animation-delay: 1s;">
                        <div style="width: 46px; height: 58px; background: linear-gradient(145deg, #1e4da1, #0a2e7a); border-radius: 9px 9px 9px 2px; box-shadow: 0 6px 18px rgba(0,0,0,0.4); display: flex; flex-direction: column; align-items: center; justify-content: center; border: 1px solid rgba(96,165,250,0.3);">
                            <div style="width: 24px; height: 2.5px; background: rgba(96,165,250,0.6); border-radius: 2px; margin-bottom: 3px;"></div>
                            <div style="width: 20px; height: 2.5px; background: rgba(96,165,250,0.4); border-radius: 2px; margin-bottom: 3px;"></div>
                            <div style="width: 16px; height: 2.5px; background: rgba(96,165,250,0.3); border-radius: 2px;"></div>
                        </div>
                    </div>

                    {{-- Main PDF icon --}}
                    <div class="relative" style="z-index: 5;">
                        <div style="position: absolute; bottom: -24px; left: 50%; transform: translateX(-50%); width: 160px; height: 30px; background: radial-gradient(ellipse, rgba(37,99,235,0.5) 0%, transparent 70%); border-radius: 50%; filter: blur(10px);"></div>
                        <div style="width: 160px; height: 200px; background: linear-gradient(145deg, #c8dfff 0%, #aecfff 30%, #89b8ff 70%, #5e9aff 100%); border-radius: 18px 18px 18px 4px; box-shadow: 12px 18px 48px rgba(0,0,0,0.55), -4px -4px 16px rgba(255,255,255,0.08), inset 0 1px 0 rgba(255,255,255,0.3); position: relative; transform: perspective(600px) rotateY(-8deg) rotateX(4deg);">
                            <div style="position: absolute; top: 0; right: 0; width: 36px; height: 36px; background: linear-gradient(225deg, #fff 40%, #89b8ff 100%); clip-path: polygon(100% 0, 0 0, 100% 100%); border-radius: 0 18px 0 0; opacity: 0.85;"></div>
                            <div style="position: absolute; top: 50px; left: 22px; right: 22px; display: flex; flex-direction: column; gap: 9px;">
                                <div style="height: 4px; background: rgba(10,46,122,0.35); border-radius: 3px;"></div>
                                <div style="height: 4px; background: rgba(10,46,122,0.28); border-radius: 3px; width: 80%;"></div>
                                <div style="height: 4px; background: rgba(10,46,122,0.22); border-radius: 3px; width: 65%;"></div>
                            </div>
                            <div style="position: absolute; bottom: 22px; left: 50%; transform: translateX(-50%); background: linear-gradient(135deg, #0c408b, #0765df); color: #fff; font-weight: 900; font-size: 20px; letter-spacing: 2px; padding: 8px 22px; border-radius: 10px; box-shadow: 0 4px 18px rgba(7,101,223,0.6); white-space: nowrap; border: 1.5px solid rgba(96,165,250,0.4);">
                                PDF
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- Bottom fade --}}
        <div class="absolute bottom-0 inset-x-0 h-20 pointer-events-none" style="background: linear-gradient(to bottom, transparent, #020b1e); z-index: 10;"></div>
    </section>

    {{-- ===== DAFTAR PENUGASAN SECTION ===== --}}
    {{-- Background stays fully dark — uses bacground-card-infinite.png as texture --}}
    <section id="daftar-penugasan" class="relative py-14 px-4 sm:px-6 lg:px-8 overflow-hidden" style="background: #020b1e;">

        {{-- Section bg: bacground-card-infinite texture (dark, no fade-to-light) --}}
        <img
            src="{{ asset('assets/images/bacground-card-infinite.png') }}"
            alt=""
            class="absolute inset-0 w-full h-full object-cover object-top pointer-events-none"
            style="z-index: 0; opacity: 0.55;"
        />
        {{-- Unified dark overlay so it blends with the hero --}}
        <div class="absolute inset-0 pointer-events-none" style="z-index: 1; background: rgba(2,11,30,0.72);"></div>

        {{-- Content --}}
        <div class="relative max-w-[1100px] mx-auto" style="z-index: 2;">

            {{-- Section label --}}
            <div class="flex items-center gap-3 mb-5">
                <div style="width: 5px; height: 28px; background: linear-gradient(180deg, #3b82f6, #38bdf8); border-radius: 4px; flex-shrink: 0;"></div>
                <span class="font-black text-base" style="color: #fff; letter-spacing: 0.02em;">Penugasan</span>
            </div>

            @php
            $penugasanList = [
                [
                    'judul'    => 'Infinite',
                    'deskripsi'=> 'Seluruh penugasan yang diberikan panitia dapat diakses melalui halaman ini dalam format PDF. Semangat dalam menjalani hidup yaa',
                    'ukuran'   => '2.4 MB',
                    'tanggal'  => '20 July 2026',
                    'kategori' => 'Infinite',
                    'file'     => '#',
                ],
                [
                    'judul'    => 'Infinite',
                    'deskripsi'=> 'Seluruh penugasan yang diberikan panitia dapat diakses melalui halaman ini dalam format PDF. Semangat dalam menjalani hidup yaa',
                    'ukuran'   => '2.4 MB',
                    'tanggal'  => '20 July 2026',
                    'kategori' => 'Infinite',
                    'file'     => '#',
                ],
                [
                    'judul'    => 'Infinite',
                    'deskripsi'=> 'Seluruh penugasan yang diberikan panitia dapat diakses melalui halaman ini dalam format PDF. Semangat dalam menjalani hidup yaa',
                    'ukuran'   => '2.4 MB',
                    'tanggal'  => '20 July 2026',
                    'kategori' => 'Infinite',
                    'file'     => '#',
                ],
                [
                    'judul'    => 'Infinite',
                    'deskripsi'=> 'Seluruh penugasan yang diberikan panitia dapat diakses melalui halaman ini dalam format PDF. Semangat dalam menjalani hidup yaa',
                    'ukuran'   => '2.4 MB',
                    'tanggal'  => '20 July 2026',
                    'kategori' => 'Infinite',
                    'file'     => '#',
                ],
            ];
            @endphp

            <div class="flex flex-col gap-4">
                @foreach($penugasanList as $item)

                {{-- ========= CARD ========= --}}
                <div class="group relative overflow-hidden rounded-xl transition-all duration-300 hover:-translate-y-0.5"
                    style="border: 1px solid rgba(59,130,246,0.25); box-shadow: 0 4px 24px rgba(2,8,30,0.6);">

                    <div class="flex flex-col md:flex-row" style="min-height: 155px;">

                        {{-- ===== LEFT: Dark textured panel ===== --}}
                        <div class="relative flex items-center overflow-hidden flex-1">

                            {{-- bacground-card-infinite as the card's own bg --}}
                            <img
                                src="{{ asset('assets/images/bacground-card-infinite.png') }}"
                                alt=""
                                class="absolute inset-0 w-full h-full object-cover object-center pointer-events-none"
                                style="z-index: 0; opacity: 1;"
                            />
                            {{-- Semi-transparent overlay so text is readable --}}
                            <div class="absolute inset-0 pointer-events-none" style="z-index: 1; background: linear-gradient(100deg, rgba(1,5,22,0.80) 0%, rgba(2,10,35,0.65) 60%, rgba(3,14,50,0.40) 100%);"></div>

                            {{-- Text block --}}
                            <div class="relative flex-1 min-w-0 px-7 py-6" style="z-index: 3;">
                                <h2 class="font-black mb-2 leading-none"
                                    style="font-size: 2rem; color: #fff; text-shadow: 0 2px 16px rgba(37,99,235,0.5);">
                                    {{ $item['judul'] }}
                                </h2>
                                <p class="mb-5 leading-relaxed"
                                    style="font-size: 0.82rem; color: rgba(186,214,255,0.80); max-width: 320px; line-height: 1.6;">
                                    {{ $item['deskripsi'] }}
                                </p>

                                {{-- Download button --}}
                                <a href="{{ $item['file'] }}"
                                    class="inline-flex items-center gap-2 font-bold rounded-lg transition-all duration-200 hover:brightness-110 hover:scale-105"
                                    style="background: linear-gradient(135deg, #1d4ed8, #0765df); color:#fff; padding: 8px 20px; font-size: 0.8rem; box-shadow: 0 4px 14px rgba(7,101,223,0.5); border: 1px solid rgba(96,165,250,0.3);"
                                >
                                    <svg class="w-3.5 h-3.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                    Download
                                </a>
                            </div>

                            {{-- Infinity symbol — right side of dark panel, fades in from the right --}}
                            <div class="relative self-stretch flex-shrink-0 overflow-hidden" style="width: 220px; z-index: 2;">
                                <img
                                    src="{{ asset('assets/images/bacground-infinite.png') }}"
                                    alt="Infinity"
                                    class="absolute inset-0 w-full h-full object-cover object-center pointer-events-none"
                                    style="opacity: 1; mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.5) 20%, black 50%); -webkit-mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.5) 20%, black 50%);"
                                />
                            </div>

                        </div>

                        {{-- ===== DIVIDER ===== --}}
                        <div class="hidden md:block flex-shrink-0" style="width: 1px; background: linear-gradient(180deg, rgba(255,255,255,0.06), rgba(255,255,255,0.15), rgba(255,255,255,0.06));"></div>

                        {{-- ===== RIGHT: White metadata panel ===== --}}
                        <div class="flex flex-col justify-center gap-4 bg-white px-7 py-6 flex-shrink-0" style="min-width: 230px; max-width: 250px;">

                            {{-- Ukuran File --}}
                            <div class="flex items-center gap-3">
                                <div style="width:34px; height:34px; border-radius:8px; background:#eff6ff; flex-shrink:0; display:flex; align-items:center; justify-content:center;">
                                    <svg width="17" height="17" fill="none" stroke="#2563eb" stroke-width="1.8" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p style="font-size:0.65rem; color:#94a3b8; font-weight:600; margin-bottom:2px;">Ukuran File</p>
                                    <p style="font-size:0.9rem; color:#1e293b; font-weight:800; line-height:1;">{{ $item['ukuran'] }}</p>
                                </div>
                            </div>

                            <div style="height:1px; background:#f1f5f9;"></div>

                            {{-- Tanggal Upload --}}
                            <div class="flex items-center gap-3">
                                <div style="width:34px; height:34px; border-radius:8px; background:#eff6ff; flex-shrink:0; display:flex; align-items:center; justify-content:center;">
                                    <svg width="17" height="17" fill="none" stroke="#2563eb" stroke-width="1.8" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p style="font-size:0.65rem; color:#94a3b8; font-weight:600; margin-bottom:2px;">Tanggal Upload</p>
                                    <p style="font-size:0.9rem; color:#1e293b; font-weight:800; line-height:1;">{{ $item['tanggal'] }}</p>
                                </div>
                            </div>

                            <div style="height:1px; background:#f1f5f9;"></div>

                            {{-- Kategori --}}
                            <div class="flex items-center gap-3">
                                <div style="width:34px; height:34px; border-radius:8px; background:#eff6ff; flex-shrink:0; display:flex; align-items:center; justify-content:center;">
                                    <svg width="17" height="17" fill="none" stroke="#2563eb" stroke-width="1.8" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p style="font-size:0.65rem; color:#94a3b8; font-weight:600; margin-bottom:2px;">Kategori</p>
                                    <p style="font-size:0.9rem; color:#1e293b; font-weight:800; line-height:1;">{{ $item['kategori'] }}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                @endforeach
            </div>

        </div>
    </section>

    {{-- Footer --}}
    <x-footer />

</div>
@endsection
