@extends('layouts.app')

@section('title', 'Dokumentasi ' . $proker->nama . ' — UKMFT ITC')

@php
    // Nama divisi
    $namaDivisi = $proker->divisi->nama_divisi ?? 'Umum';

    // Tampilkan P&K jika di database ditulis PK
    $namaDivisiTampil = strtoupper($namaDivisi) === 'PK'
        ? 'P&K'
        : $namaDivisi;

    // Warna masing-masing divisi
    $warnaDivisi = [
        'LITBANG' => '#2563eb',
        'P&K'     => '#0891b2',
        'PK'      => '#0891b2',
        'PSDM'    => '#7c3aed',
        'INFOKOM' => '#d97706',
        'HUMAS'   => '#16a34a',
        'BPH'     => '#dc2626',
    ];

    $divisiColor = $warnaDivisi[strtoupper($namaDivisi)] ?? '#2563eb';

    // Pisahkan dokumentasi berdasarkan tipe
    $fotos = $proker->dokumentasi
        ->where('type', 'foto')
        ->values();

    $videos = $proker->dokumentasi
        ->where('type', 'video')
        ->values();

    $semua = $proker->dokumentasi->values();

    $totalSemua = $semua->count();
    $totalFoto = $fotos->count();
    $totalVideo = $videos->count();

    // Format tanggal
    $tanggal = $proker->tanggal_berlangsung
        ? \Carbon\Carbon::parse($proker->tanggal_berlangsung)->translatedFormat('d F Y')
        : '-';

    // Foto pertama untuk gambar hero
    $fotoHero = $fotos->first();
@endphp

@section('content')

<div style="font-family: 'Poppins', sans-serif; min-height: 100vh; background: #f0f5ff; overflow-x: hidden;">

    <x-navbar />

    {{-- ====== HERO SECTION ====== --}}
    <section style="
        position: relative;
        background: linear-gradient(135deg, #e8f0ff 0%, #f0f6ff 50%, #e4eeff 100%);
        overflow: hidden;
        padding-top: 80px;
        padding-bottom: 0;
    ">

        {{-- Dot Matrix Left --}}
        <div style="position: absolute; left: 40px; top: 45%; transform: translateY(-50%); display: grid; grid-template-columns: repeat(5, 1fr); gap: 9px; opacity: 0.45; z-index: 1; pointer-events: none;">
            @for ($i = 0; $i < 25; $i++)
                <div style="width: 6px; height: 6px; border-radius: 50%; background: #7ba4f0;"></div>
            @endfor
        </div>

        {{-- Left solid semicircle --}}
        <div style="position: absolute; left: -70px; bottom: -20px; width: 200px; height: 200px; border-radius: 50%; background: #3b6fd4; opacity: 0.85; z-index: 1; pointer-events: none;"></div>

        {{-- Top-right pill --}}
        <div style="position: absolute; right: 28%; top: 10px; width: 42px; height: 110px; background: linear-gradient(180deg, #7ba4f0 0%, #4a79e0 100%); border-radius: 40px; transform: rotate(35deg); opacity: 0.9; z-index: 1; pointer-events: none;"></div>

        {{-- Breadcrumb + Back --}}
        <div style="position: relative; z-index: 10; max-width: 1100px; margin: 0 auto; padding: 32px 60px 0 60px;">

            <div style="display: flex; align-items: center; gap: 6px; font-size: 12px; color: #4a6891; font-weight: 500; margin-bottom: 18px; flex-wrap: wrap;">

                <a
                    href="{{ route('home') }}"
                    style="color: #4a6891; text-decoration: none;"
                    onmouseover="this.style.color='#1d4fbb'"
                    onmouseout="this.style.color='#4a6891'"
                >
                    Beranda
                </a>

                <span style="color: #a0b0cc;">›</span>

                <a
                    href="{{ route('proker') }}"
                    style="color: #4a6891; text-decoration: none;"
                    onmouseover="this.style.color='#1d4fbb'"
                    onmouseout="this.style.color='#4a6891'"
                >
                    Program Kerja
                </a>

                <span style="color: #a0b0cc;">›</span>

                <a
                    href="{{ route('view-proker') }}"
                    style="color: #4a6891; text-decoration: none;"
                    onmouseover="this.style.color='#1d4fbb'"
                    onmouseout="this.style.color='#4a6891'"
                >
                    {{ $namaDivisiTampil }}
                </a>

                <span style="color: #a0b0cc;">›</span>

                <a
                    href="{{ route('detail-proker', $proker->id) }}"
                    style="color: #4a6891; text-decoration: none;"
                    onmouseover="this.style.color='#1d4fbb'"
                    onmouseout="this.style.color='#4a6891'"
                >
                    {{ $proker->nama }}
                </a>

                <span style="color: #a0b0cc;">›</span>

                <span style="color: #1a2744; font-weight: 600;">
                    Dokumentasi
                </span>

            </div>

            <div style="margin-bottom: 20px;">

                <a
                    href="{{ route('detail-proker', $proker->id) }}"
                    style="display: inline-flex; align-items: center; gap: 7px; font-size: 12px; font-weight: 700; color: #1d4fbb; text-decoration: none; border: 1.5px solid #c4d4f5; border-radius: 999px; padding: 7px 16px; background: rgba(255,255,255,0.75); backdrop-filter: blur(4px); transition: all 0.2s;"
                    onmouseover="this.style.background='#eef3ff'; this.style.borderColor='#1d4fbb';"
                    onmouseout="this.style.background='rgba(255,255,255,0.75)'; this.style.borderColor='#c4d4f5';"
                >

                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                    </svg>

                    Kembali ke daftar program

                </a>

            </div>

        </div>


        {{-- Hero two-column --}}
        <div style="position: relative; z-index: 10; max-width: 1100px; margin: 0 auto; padding: 0 60px 0 60px; display: flex; flex-direction: row; align-items: flex-start; justify-content: space-between; gap: 32px;">

            <div style="flex: 1; min-width: 0; padding-left: 60px; padding-bottom: 40px;">

                <div style="margin-bottom: 14px;">

                    <span style="display: inline-block; background: {{ $divisiColor }}; color: #fff; font-size: 11px; font-weight: 800; padding: 4px 14px; border-radius: 999px; letter-spacing: 0.8px; text-transform: uppercase;">
                        DOKUMENTASI
                    </span>

                </div>


                {{-- Judul dari database --}}
                @php
                    $judulParts = preg_split('/\s+/', trim($proker->nama));
                    $judulPertama = $judulParts[0] ?? '';
                    $judulSisa = implode(' ', array_slice($judulParts, 1));
                @endphp

                <h1 style="font-size: clamp(30px, 4.5vw, 54px); font-weight: 900; line-height: 1.05; margin: 0 0 4px 0; color: #1a1a2e; letter-spacing: -1px; text-transform: uppercase;">
                    {{ strtoupper($judulPertama) }}
                </h1>

                <h1 style="font-size: clamp(30px, 4.5vw, 54px); font-weight: 900; line-height: 1.0; margin: 0 0 18px 0; color: {{ $divisiColor }}; letter-spacing: -1px; text-transform: uppercase;">
                    {{ strtoupper($judulSisa) }}
                </h1>

                <p style="font-size: 13.5px; font-weight: 500; color: #2d3748; line-height: 1.75; max-width: 430px; margin: 0;">
                    Dokumentasi kegiatan {{ $proker->nama }} yang telah dilaksanakan oleh Divisi {{ $namaDivisiTampil }} UKMFT-ITC.
                </p>

            </div>


            <div style="flex-shrink: 0; display: flex; align-items: flex-end; justify-content: flex-end; padding-right: 20px; align-self: flex-end;">

                @if($fotoHero)

                    <img
                        src="{{ asset('assets/images/dokumentasi/' . $fotoHero->file) }}"
                        alt="{{ $proker->nama }}"
                        style="width: 280px; height: 185px; object-fit: cover; border-radius: 20px 20px 20px 0; box-shadow: 8px 12px 28px rgba(0,40,120,0.18); display: block;"
                        onerror="this.style.display='none'"
                    >

                @else

                    <div style="
                        width: 280px;
                        height: 185px;
                        border-radius: 20px 20px 20px 0;
                        background: #dbe8ff;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        color: #6b7a99;
                        font-size: 12px;
                        text-align: center;
                    ">
                        Belum ada foto dokumentasi
                    </div>

                @endif

            </div>

        </div>

    </section>


    {{-- ====== FILTER TAB BAR ====== --}}
    <div style="background: #fff; border-bottom: 1px solid #e2ecff; position: sticky; top: 0; z-index: 40; box-shadow: 0 2px 8px rgba(29,79,187,0.05);">

        <div style="max-width: 1200px; margin: 0 auto; padding: 0 40px; display: flex; align-items: center; gap: 0;">

            <nav style="display: flex; gap: 0; flex: 1;">

                <button
                    id="tab-btn-semua"
                    onclick="switchFilter('semua')"
                    style="font-family: 'Poppins', sans-serif; font-size: 13px; font-weight: 700; color: #1d4fbb; padding: 16px 22px; border: none; background: transparent; border-bottom: 2.5px solid #1d4fbb; cursor: pointer; white-space: nowrap; transition: all 0.2s; display: flex; align-items: center; gap: 8px;"
                    data-active="1"
                >

                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                    </svg>

                    Semua

                    <span
                        id="count-semua"
                        style="background: #1d4fbb; color: #fff; font-size: 11px; font-weight: 700; padding: 1px 8px; border-radius: 999px; min-width: 22px; text-align: center;"
                    >
                        {{ $totalSemua }}
                    </span>

                </button>


                @if($totalFoto > 0)

                <button
                    id="tab-btn-foto"
                    onclick="switchFilter('foto')"
                    style="font-family: 'Poppins', sans-serif; font-size: 13px; font-weight: 600; color: #6b7a99; padding: 16px 22px; border: none; background: transparent; border-bottom: 2.5px solid transparent; cursor: pointer; white-space: nowrap; transition: all 0.2s; display: flex; align-items: center; gap: 8px;"
                    data-active="0"
                    onmouseover="if(this.dataset.active!='1') this.style.color='#1d4fbb'"
                    onmouseout="if(this.dataset.active!='1') this.style.color='#6b7a99'"
                >

                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                        <circle cx="12" cy="13" r="3"/>
                    </svg>

                    Foto

                    <span
                        id="count-foto"
                        style="background: #e2ecff; color: #1d4fbb; font-size: 11px; font-weight: 700; padding: 1px 8px; border-radius: 999px; min-width: 22px; text-align: center; transition: all 0.2s;"
                    >
                        {{ $totalFoto }}
                    </span>

                </button>

                @endif


                @if($totalVideo > 0)

                <button
                    id="tab-btn-video"
                    onclick="switchFilter('video')"
                    style="font-family: 'Poppins', sans-serif; font-size: 13px; font-weight: 600; color: #6b7a99; padding: 16px 22px; border: none; background: transparent; border-bottom: 2.5px solid transparent; cursor: pointer; white-space: nowrap; transition: all 0.2s; display: flex; align-items: center; gap: 8px;"
                    data-active="0"
                    onmouseover="if(this.dataset.active!='1') this.style.color='#1d4fbb'"
                    onmouseout="if(this.dataset.active!='1') this.style.color='#6b7a99'"
                >

                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.723v6.554a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                    </svg>

                    Video

                    <span
                        id="count-video"
                        style="background: #e2ecff; color: #1d4fbb; font-size: 11px; font-weight: 700; padding: 1px 8px; border-radius: 999px; min-width: 22px; text-align: center; transition: all 0.2s;"
                    >
                        {{ $totalVideo }}
                    </span>

                </button>

                @endif

            </nav>

        </div>

    </div>


    {{-- ====== MAIN CONTENT ====== --}}
    <section style="max-width: 1200px; margin: 0 auto; padding: 36px 40px 80px 40px;">

        <div style="display: flex; gap: 28px; align-items: flex-start;">

            {{-- LEFT: MEDIA --}}
            <div style="flex: 1; min-width: 0;">

                {{-- FOTO SECTION --}}
                <div id="section-foto">

                    @if($totalFoto > 0)

                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 18px;">

                        <div>

                            <div style="display: inline-flex; align-items: center; gap: 7px; background: #1d4fbb; color: #fff; font-size: 11px; font-weight: 800; padding: 4px 13px; border-radius: 999px; letter-spacing: 0.7px; text-transform: uppercase; margin-bottom: 8px;">

                                <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                                    <circle cx="12" cy="13" r="3"/>
                                </svg>

                                Galeri Foto

                            </div>

                            <h2 style="font-size: 20px; font-weight: 900; color: #1a2744; margin: 0; line-height: 1.2;">
                                {{ $totalFoto }} Foto Kegiatan
                            </h2>

                        </div>

                    </div>


                    <div id="foto-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; margin-bottom: 40px;">

                        @foreach($fotos as $idx => $foto)

                        <div
                            class="foto-item"
                            onclick="openLightbox({{ $idx }})"
                            style="border-radius: 14px; overflow: hidden; position: relative; cursor: pointer; box-shadow: 0 3px 14px rgba(29,79,187,0.10); border: 1px solid #e2ecff; background: #fff; aspect-ratio: 4/3; transition: transform 0.25s, box-shadow 0.25s;"
                            onmouseover="this.querySelector('.foto-overlay').style.opacity='1'; this.style.transform='translateY(-4px)'; this.style.boxShadow='0 12px 32px rgba(29,79,187,0.18)';"
                            onmouseout="this.querySelector('.foto-overlay').style.opacity='0'; this.style.transform=''; this.style.boxShadow='0 3px 14px rgba(29,79,187,0.10)';"
                        >

                            <img
                                src="{{ asset('assets/images/dokumentasi/' . $foto->file) }}"
                                alt="{{ $foto->caption ?? 'Foto' }}"
                                style="width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.3s;"
                                onmouseover="this.style.transform='scale(1.04)'"
                                onmouseout="this.style.transform='scale(1)'"
                                onerror="this.style.opacity='0.4'"
                            >


                            <div
                                class="foto-overlay"
                                style="position: absolute; inset: 0; background: linear-gradient(180deg, rgba(0,0,0,0.04) 0%, rgba(10,30,80,0.76) 100%); opacity: 0; transition: opacity 0.25s; display: flex; flex-direction: column; align-items: flex-start; justify-content: flex-end; padding: 14px; gap: 6px;"
                            >

                                @if(!empty($foto->caption))

                                <span style="font-size: 12px; font-weight: 600; color: #fff; line-height: 1.4;">
                                    {{ $foto->caption }}
                                </span>

                                @endif

                                <div style="display: flex; align-items: center; gap: 5px; background: rgba(255,255,255,0.18); border-radius: 6px; padding: 4px 10px; backdrop-filter: blur(4px);">

                                    <svg width="11" height="11" fill="white" viewBox="0 0 20 20">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                    </svg>

                                    <span style="font-size: 11px; font-weight: 600; color: #fff;">
                                        Lihat Penuh
                                    </span>

                                </div>

                            </div>


                            <div style="position: absolute; top: 10px; right: 10px; background: rgba(0,0,0,0.5); color: #fff; font-size: 10px; font-weight: 700; padding: 2px 8px; border-radius: 999px; backdrop-filter: blur(4px);">
                                {{ $idx + 1 }}/{{ $totalFoto }}
                            </div>

                        </div>

                        @endforeach

                    </div>

                    @endif

                </div>


                {{-- VIDEO SECTION --}}
                <div id="section-video">

                    @if($totalVideo > 0)

                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 18px;">

                        <div>

                            <div style="display: inline-flex; align-items: center; gap: 7px; background: #1a2744; color: #fff; font-size: 11px; font-weight: 800; padding: 4px 13px; border-radius: 999px; letter-spacing: 0.7px; text-transform: uppercase; margin-bottom: 8px;">

                                <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.723v6.554a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                </svg>

                                Galeri Video

                            </div>

                            <h2 style="font-size: 20px; font-weight: 900; color: #1a2744; margin: 0; line-height: 1.2;">
                                {{ $totalVideo }} Video Kegiatan
                            </h2>

                        </div>

                    </div>


                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 18px;">

                        @foreach($videos as $idx => $vid)

                        <div
                            class="video-item"
                            style="background: #fff; border: 1.5px solid #e2ecff; border-radius: 16px; overflow: hidden; box-shadow: 0 3px 14px rgba(29,79,187,0.09); transition: transform 0.25s, box-shadow 0.25s;"
                            onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 12px 32px rgba(29,79,187,0.16)';"
                            onmouseout="this.style.transform=''; this.style.boxShadow='0 3px 14px rgba(29,79,187,0.09)';"
                        >

                            <div
                                style="position: relative; cursor: pointer; aspect-ratio: 16/9; background: #0a0a14; overflow: hidden;"
                                onclick="openVideoModal('{{ $vid->embed }}')"
                            >

                                @if($vid->thumbnail)

                                <img
                                    src="{{ $vid->thumbnail }}"
                                    alt="{{ $vid->caption ?? 'Video' }}"
                                    style="width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.3s; filter: brightness(0.75);"
                                    onmouseover="this.style.transform='scale(1.04)'"
                                    onmouseout="this.style.transform='scale(1)'"
                                >

                                @else

                                <div style="
                                    width:100%;
                                    height:100%;
                                    display:flex;
                                    align-items:center;
                                    justify-content:center;
                                    color:#fff;
                                    font-size:12px;
                                    background:#101827;
                                ">
                                    Video Dokumentasi
                                </div>

                                @endif


                                <div style="position: absolute; inset: 0; display: flex; align-items: center; justify-content: center;">

                                    <div
                                        style="width: 54px; height: 54px; background: rgba(255,255,255,0.95); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 6px 20px rgba(0,0,0,0.3); transition: transform 0.2s;"
                                        onmouseover="this.style.transform='scale(1.12)'"
                                        onmouseout="this.style.transform='scale(1)'"
                                    >

                                        <svg width="20" height="20" fill="#1d4fbb" viewBox="0 0 24 24" style="margin-left: 3px;">
                                            <path d="M8 5v14l11-7z"/>
                                        </svg>

                                    </div>

                                </div>


                                @if(!empty($vid->durasi))

                                <div style="position: absolute; bottom: 10px; right: 10px; background: rgba(0,0,0,0.75); color: #fff; font-size: 11px; font-weight: 700; padding: 3px 9px; border-radius: 6px; backdrop-filter: blur(4px);">
                                    {{ $vid->durasi }}
                                </div>

                                @endif

                            </div>


                            <div style="padding: 14px 16px; display: flex; align-items: center; gap: 10px;">

                                <div style="width: 32px; height: 32px; background: linear-gradient(135deg, #1d4fbb, #0e3590); border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">

                                    <svg width="14" height="14" fill="white" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>

                                </div>

                                <div>

                                    <div style="font-size: 13px; font-weight: 700; color: #1a2744; line-height: 1.4;">
                                        {{ $vid->caption ?? 'Video kegiatan' }}
                                    </div>

                                    @if(!empty($vid->durasi))

                                    <div style="font-size: 11px; color: #6b7a99; font-weight: 500; margin-top: 2px;">
                                        Durasi: {{ $vid->durasi }}
                                    </div>

                                    @endif

                                </div>

                            </div>

                        </div>

                        @endforeach

                    </div>

                    @endif

                </div>

            </div>


            {{-- RIGHT: SIDEBAR --}}
            <div style="flex-shrink: 0; width: 256px; display: flex; flex-direction: column; gap: 16px; position: sticky; top: 72px;">

                {{-- Activity Info --}}
                <div style="background: #fff; border: 1.5px solid #dbe8ff; border-radius: 18px; padding: 22px; box-shadow: 0 4px 18px rgba(29,79,187,0.08);">

                    <h3 style="font-size: 15px; font-weight: 800; color: #1a2744; margin: 0 0 18px 0; padding-bottom: 14px; border-bottom: 1.5px solid #e8f0ff;">
                        Informasi Kegiatan
                    </h3>


                    <div style="display: flex; flex-direction: column; gap: 14px;">

                        {{-- Tanggal --}}
                        <div style="display: flex; align-items: flex-start; gap: 12px;">

                            <div style="width: 34px; height: 34px; background: #eef3ff; border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; border: 1px solid #dbe8ff;">

                                <svg width="16" height="16" fill="none" stroke="#1d4fbb" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>

                            </div>

                            <div>

                                <div style="font-size: 10px; font-weight: 700; color: #9aa8c0; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 2px;">
                                    Tanggal
                                </div>

                                <div style="font-size: 13px; font-weight: 700; color: #1a2744; line-height: 1.3;">
                                    {{ $tanggal }}
                                </div>

                            </div>

                        </div>


                        {{-- Waktu --}}
                        <div style="display: flex; align-items: flex-start; gap: 12px;">

                            <div style="width: 34px; height: 34px; background: #eef3ff; border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; border: 1px solid #dbe8ff;">

                                <svg width="16" height="16" fill="none" stroke="#1d4fbb" stroke-width="2" viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polyline points="12 6 12 12 16 14"/>
                                </svg>

                            </div>

                            <div>

                                <div style="font-size: 10px; font-weight: 700; color: #9aa8c0; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 2px;">
                                    Waktu
                                </div>

                                <div style="font-size: 13px; font-weight: 700; color: #1a2744; line-height: 1.3;">
                                    -
                                </div>

                            </div>

                        </div>


                        {{-- Lokasi --}}
                        <div style="display: flex; align-items: flex-start; gap: 12px;">

                            <div style="width: 34px; height: 34px; background: #eef3ff; border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; border: 1px solid #dbe8ff;">

                                <svg width="16" height="16" fill="none" stroke="#1d4fbb" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>

                            </div>

                            <div>

                                <div style="font-size: 10px; font-weight: 700; color: #9aa8c0; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 2px;">
                                    Lokasi
                                </div>

                                <div style="font-size: 13px; font-weight: 700; color: #1a2744; line-height: 1.3;">
                                    {{ $proker->lokasi ?? '-' }}
                                </div>

                            </div>

                        </div>


                        {{-- Peserta --}}
                        <div style="display: flex; align-items: flex-start; gap: 12px;">

                            <div style="width: 34px; height: 34px; background: #eef3ff; border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; border: 1px solid #dbe8ff;">

                                <svg width="16" height="16" fill="none" stroke="#1d4fbb" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>

                            </div>

                            <div>

                                <div style="font-size: 10px; font-weight: 700; color: #9aa8c0; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 2px;">
                                    Peserta
                                </div>

                                <div style="font-size: 13px; font-weight: 700; color: #1a2744; line-height: 1.3;">
                                    {{ $proker->peserta ?? '-' }} Peserta
                                </div>

                            </div>

                        </div>


                        {{-- Divisi --}}
                        <div style="display: flex; align-items: flex-start; gap: 12px;">

                            <div style="width: 34px; height: 34px; background: #eef3ff; border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; border: 1px solid #dbe8ff;">

                                <svg width="16" height="16" fill="none" stroke="#1d4fbb" stroke-width="2" viewBox="0 0 24 24">
                                    <rect x="3" y="3" width="7" height="7"/>
                                    <rect x="14" y="3" width="7" height="7"/>
                                    <rect x="14" y="14" width="7" height="7"/>
                                    <rect x="3" y="14" width="7" height="7"/>
                                </svg>

                            </div>

                            <div>

                                <div style="font-size: 10px; font-weight: 700; color: #9aa8c0; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 2px;">
                                    Divisi
                                </div>

                                <div style="font-size: 13px; font-weight: 700; color: #1a2744; line-height: 1.3;">
                                    {{ $namaDivisiTampil }}
                                </div>

                            </div>

                        </div>


                        {{-- Kategori --}}
                        <div style="display: flex; align-items: flex-start; gap: 12px;">

                            <div style="width: 34px; height: 34px; background: #eef3ff; border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; border: 1px solid #dbe8ff;">

                                <svg width="16" height="16" fill="none" stroke="#1d4fbb" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A2 2 0 013 12V7a4 4 0 014-4z"/>
                                </svg>

                            </div>

                            <div>

                                <div style="font-size: 10px; font-weight: 700; color: #9aa8c0; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 2px;">
                                    Kategori
                                </div>

                                <div style="font-size: 13px; font-weight: 700; color: #1a2744; line-height: 1.3;">
                                    -
                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Media Stats --}}
                <div style="background: linear-gradient(135deg, #1d4fbb, #0e3590); border-radius: 18px; padding: 20px 22px; box-shadow: 0 6px 20px rgba(29,79,187,0.22);">

                    <div style="font-size: 12px; font-weight: 800; color: rgba(255,255,255,0.65); text-transform: uppercase; letter-spacing: 0.7px; margin-bottom: 14px;">
                        Statistik Media
                    </div>


                    <div style="display: flex; flex-direction: column; gap: 10px;">

                        <div style="display: flex; align-items: center; justify-content: space-between;">

                            <div style="display: flex; align-items: center; gap: 8px; color: rgba(255,255,255,0.85); font-size: 13px; font-weight: 600;">

                                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>

                                Total Foto

                            </div>

                            <span style="font-size: 20px; font-weight: 900; color: #fff;">
                                {{ $totalFoto }}
                            </span>

                        </div>


                        <div style="height: 1px; background: rgba(255,255,255,0.12);"></div>


                        <div style="display: flex; align-items: center; justify-content: space-between;">

                            <div style="display: flex; align-items: center; gap: 8px; color: rgba(255,255,255,0.85); font-size: 13px; font-weight: 600;">

                                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.723v6.554a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                </svg>

                                Total Video

                            </div>

                            <span style="font-size: 20px; font-weight: 900; color: #fff;">
                                {{ $totalVideo }}
                            </span>

                        </div>


                        <div style="height: 1px; background: rgba(255,255,255,0.12);"></div>


                        <div style="display: flex; align-items: center; justify-content: space-between;">

                            <div style="display: flex; align-items: center; gap: 8px; color: rgba(255,255,255,0.85); font-size: 13px; font-weight: 600;">

                                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                </svg>

                                Total Media

                            </div>

                            <span style="font-size: 20px; font-weight: 900; color: #fff;">
                                {{ $totalSemua }}
                            </span>

                        </div>

                    </div>

                </div>


                {{-- Back link --}}
                <a
                    href="{{ route('detail-proker', $proker->id) }}"
                    style="display: flex; align-items: center; justify-content: center; gap: 8px; padding: 13px; border-radius: 14px; border: 1.5px solid #dbe8ff; background: #fff; color: #1d4fbb; font-size: 13px; font-weight: 700; text-decoration: none; transition: all 0.2s; box-shadow: 0 2px 10px rgba(29,79,187,0.06);"
                    onmouseover="this.style.background='#eef3ff'; this.style.borderColor='#1d4fbb';"
                    onmouseout="this.style.background='#fff'; this.style.borderColor='#dbe8ff';"
                >

                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                    </svg>

                    Detail Program Kerja

                </a>

            </div>

        </div>

    </section>

</div>


<x-footer />


{{-- ====== PHOTO LIGHTBOX ====== --}}
<div
    id="lightbox"
    style="display:none; position:fixed; inset:0; z-index:9999; background:rgba(5,10,30,0.95); backdrop-filter:blur(6px); flex-direction:column; align-items:center; justify-content:center;"
    onclick="if(event.target===this) closeLightbox()"
>

    <button
        onclick="closeLightbox()"
        style="position:absolute;top:20px;right:24px;background:rgba(255,255,255,0.12);border:none;color:#fff;width:40px;height:40px;border-radius:50%;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:background 0.2s;"
        onmouseover="this.style.background='rgba(255,255,255,0.22)'"
        onmouseout="this.style.background='rgba(255,255,255,0.12)'"
    >

        <svg width="18" height="18" fill="none" stroke="white" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
        </svg>

    </button>


    <div
        id="lb-counter"
        style="position:absolute;top:24px;left:50%;transform:translateX(-50%);color:rgba(255,255,255,0.7);font-size:13px;font-weight:600;font-family:'Poppins',sans-serif;"
    ></div>


    <button
        onclick="lbNav(-1)"
        style="position:absolute;left:20px;top:50%;transform:translateY(-50%);background:rgba(255,255,255,0.12);border:none;color:#fff;width:48px;height:48px;border-radius:50%;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:background 0.2s;"
        onmouseover="this.style.background='rgba(255,255,255,0.25)'"
        onmouseout="this.style.background='rgba(255,255,255,0.12)'"
    >

        <svg width="20" height="20" fill="none" stroke="white" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
        </svg>

    </button>


    <div style="max-width:min(90vw,1000px);max-height:80vh;display:flex;flex-direction:column;align-items:center;gap:16px;">

        <img
            id="lb-img"
            src=""
            alt=""
            style="max-width:100%;max-height:72vh;object-fit:contain;border-radius:12px;box-shadow:0 20px 60px rgba(0,0,0,0.6);display:block;"
        >

        <div
            id="lb-caption"
            style="color:rgba(255,255,255,0.85);font-size:13px;font-weight:500;font-family:'Poppins',sans-serif;text-align:center;max-width:600px;line-height:1.5;"
        ></div>

    </div>


    <button
        onclick="lbNav(1)"
        style="position:absolute;right:20px;top:50%;transform:translateY(-50%);background:rgba(255,255,255,0.12);border:none;color:#fff;width:48px;height:48px;border-radius:50%;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:background 0.2s;"
        onmouseover="this.style.background='rgba(255,255,255,0.25)'"
        onmouseout="this.style.background='rgba(255,255,255,0.12)'"
    >

        <svg width="20" height="20" fill="none" stroke="white" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
        </svg>

    </button>


    <div
        id="lb-thumbs"
        style="position:absolute;bottom:16px;left:50%;transform:translateX(-50%);display:flex;gap:8px;max-width:90vw;overflow-x:auto;padding:6px;"
    ></div>

</div>


{{-- ====== VIDEO MODAL ====== --}}
<div
    id="video-modal"
    style="display:none; position:fixed; inset:0; z-index:9999; background:rgba(5,10,30,0.95); backdrop-filter:blur(6px); align-items:center; justify-content:center;"
    onclick="if(event.target===this) closeVideoModal()"
>

    <div style="position:relative;width:min(90vw,900px);">

        <button
            onclick="closeVideoModal()"
            style="position:absolute;top:-44px;right:0;background:rgba(255,255,255,0.12);border:none;color:#fff;width:38px;height:38px;border-radius:50%;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:background 0.2s;"
            onmouseover="this.style.background='rgba(255,255,255,0.22)'"
            onmouseout="this.style.background='rgba(255,255,255,0.12)'"
        >

            <svg width="16" height="16" fill="none" stroke="white" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>

        </button>


        <div style="position:relative;padding-bottom:56.25%;height:0;border-radius:14px;overflow:hidden;box-shadow:0 20px 60px rgba(0,0,0,0.6);">

            <iframe
                id="video-iframe"
                src=""
                frameborder="0"
                allowfullscreen
                style="position:absolute;inset:0;width:100%;height:100%;"
            ></iframe>

        </div>

    </div>

</div>


<script>

/*
|--------------------------------------------------------------------------
| FOTO DATA
|--------------------------------------------------------------------------
|
| Jangan lagi menggunakan @json($fotos) secara langsung karena JavaScript
| sebelumnya mencari property "img", sedangkan model Dokumentasi memiliki
| property "file".
|
*/

const fotosData = @json(
    $fotos->map(function ($foto) {
        return [
            'img' => asset('assets/images/dokumentasi/' . $foto->file),
            'caption' => $foto->caption ?? 'Foto'
        ];
    })->values()
);

let currentLbIndex = 0;


/*
|--------------------------------------------------------------------------
| FILTER TABS
|--------------------------------------------------------------------------
*/

function switchFilter(type) {

    const tabs = ['semua','foto','video'];

    tabs.forEach(t => {

        const btn = document.getElementById('tab-btn-' + t);

        if (!btn) return;

        const countEl = document.getElementById('count-' + t);

        const active = (t === type);

        btn.style.color =
            active ? '#1d4fbb' : '#6b7a99';

        btn.style.borderBottom =
            active
                ? '2.5px solid #1d4fbb'
                : '2.5px solid transparent';

        btn.style.fontWeight =
            active ? '700' : '600';

        btn.dataset.active =
            active ? '1' : '0';

        if (countEl) {

            countEl.style.background =
                active ? '#1d4fbb' : '#e2ecff';

            countEl.style.color =
                active ? '#fff' : '#1d4fbb';

        }

    });


    const sf = document.getElementById('section-foto');

    const sv = document.getElementById('section-video');


    if (type === 'semua') {

        if (sf) sf.style.display = 'block';

        if (sv) sv.style.display = 'block';

    } else if (type === 'foto') {

        if (sf) sf.style.display = 'block';

        if (sv) sv.style.display = 'none';

    } else {

        if (sf) sf.style.display = 'none';

        if (sv) sv.style.display = 'block';

    }

}


/*
|--------------------------------------------------------------------------
| LIGHTBOX
|--------------------------------------------------------------------------
*/

function buildThumbs() {

    const strip =
        document.getElementById('lb-thumbs');

    strip.innerHTML = '';


    fotosData.forEach((f, i) => {

        const t =
            document.createElement('img');

        t.src = f.img;

        t.alt = f.caption || '';

        t.id = 'lb-thumb-' + i;

        t.style.cssText = `
            width:52px;
            height:38px;
            object-fit:cover;
            border-radius:6px;
            cursor:pointer;
            flex-shrink:0;
            opacity:${i === currentLbIndex ? '1' : '0.4'};
            border:2px solid ${i === currentLbIndex ? '#fff' : 'transparent'};
            transition:all 0.18s;
        `;

        t.onclick = () => setLbIndex(i);

        strip.appendChild(t);

    });

}


function setLbIndex(idx) {

    if (!fotosData.length) {
        return;
    }

    currentLbIndex =
        ((idx % fotosData.length) + fotosData.length)
        % fotosData.length;


    const foto =
        fotosData[currentLbIndex];


    document.getElementById('lb-img').src =
        foto.img;

    document.getElementById('lb-caption').textContent =
        foto.caption || '';

    document.getElementById('lb-counter').textContent =
        (currentLbIndex + 1) +
        ' / ' +
        fotosData.length;


    fotosData.forEach((_, i) => {

        const th =
            document.getElementById('lb-thumb-' + i);

        if (!th) return;

        const a =
            (i === currentLbIndex);

        th.style.opacity =
            a ? '1' : '0.4';

        th.style.border =
            a
                ? '2px solid #fff'
                : '2px solid transparent';

    });

}


function openLightbox(idx) {

    if (!fotosData.length) {
        return;
    }

    currentLbIndex = idx;

    const lb =
        document.getElementById('lightbox');

    lb.style.display = 'flex';

    document.body.style.overflow = 'hidden';

    buildThumbs();

    setLbIndex(idx);


    setTimeout(() => {

        const th =
            document.getElementById(
                'lb-thumb-' + idx
            );

        if (th) {

            th.scrollIntoView({
                behavior: 'smooth',
                block: 'nearest',
                inline: 'center'
            });

        }

    }, 80);

}


function closeLightbox() {

    document.getElementById('lightbox').style.display =
        'none';

    document.body.style.overflow = '';

}


function lbNav(dir) {

    if (!fotosData.length) {
        return;
    }

    setLbIndex(
        currentLbIndex + dir
    );


    const th =
        document.getElementById(
            'lb-thumb-' + currentLbIndex
        );

    if (th) {

        th.scrollIntoView({
            behavior: 'smooth',
            block: 'nearest',
            inline: 'center'
        });

    }

}


/*
|--------------------------------------------------------------------------
| VIDEO MODAL
|--------------------------------------------------------------------------
*/

function openVideoModal(embedUrl) {

    if (!embedUrl) {
        return;
    }

    const separator =
        embedUrl.includes('?')
            ? '&'
            : '?';

    document.getElementById('video-iframe').src =
        embedUrl +
        separator +
        'autoplay=1&rel=0';


    const m =
        document.getElementById('video-modal');

    m.style.display = 'flex';

    document.body.style.overflow = 'hidden';

}


function closeVideoModal() {

    document.getElementById('video-modal').style.display =
        'none';

    document.getElementById('video-iframe').src =
        '';

    document.body.style.overflow = '';

}


/*
|--------------------------------------------------------------------------
| KEYBOARD
|--------------------------------------------------------------------------
*/

document.addEventListener('keydown', e => {

    const lb =
        document.getElementById('lightbox');

    const vm =
        document.getElementById('video-modal');


    if (lb.style.display === 'flex') {

        if (e.key === 'ArrowRight') {
            lbNav(1);
        }

        if (e.key === 'ArrowLeft') {
            lbNav(-1);
        }

        if (e.key === 'Escape') {
            closeLightbox();
        }

    }


    if (
        vm.style.display === 'flex' &&
        e.key === 'Escape'
    ) {

        closeVideoModal();

    }

});

</script>

@endsection