@extends('layouts.app')

@section('title', $proker->nama . ' — UKMFT-ITC')

@php
    $colorMap = [
        'Litbang' => '#2563eb',
        'P&K'     => '#0891b2',
        'PSDM'    => '#7c3aed',
        'Infokom' => '#d97706',
        'Humas'   => '#16a34a',
        'BPH'     => '#dc2626'
    ];

    $namaDivisi = $proker->divisi ? $proker->divisi->nama_divisi : 'Umum';
    $divisiColor = $colorMap[$namaDivisi] ?? '#2563eb';
@endphp

@section('content')

<div style="font-family: 'Poppins', sans-serif; min-height: 100vh; background: #f0f5ff; overflow-x: hidden;">

    {{-- Navbar --}}
    <x-navbar />

    {{-- ====== HERO HEADER SECTION ====== --}}
    <section style="
        position: relative;
        background: linear-gradient(135deg, #e8f0ff 0%, #f0f6ff 50%, #e4eeff 100%);
        overflow: hidden;
        padding-top: 80px;
        padding-bottom: 0;
    ">

        {{-- Decorative Dot Matrix (Left) --}}
        <div style="position: absolute; left: 40px; top: 45%; transform: translateY(-50%); display: grid; grid-template-columns: repeat(5, 1fr); gap: 9px; opacity: 0.45; z-index: 1; pointer-events: none;">
            @for ($i = 0; $i < 25; $i++)
                <div style="width: 6px; height: 6px; border-radius: 50%; background: #7ba4f0;"></div>
            @endfor
        </div>

        {{-- Left Solid Semicircle Decoration --}}
        <div style="position: absolute; left: -70px; bottom: -20px; width: 200px; height: 200px; border-radius: 50%; background: #3b6fd4; opacity: 0.85; z-index: 1; pointer-events: none;"></div>

        {{-- Top-right pill decoration --}}
        <div style="position: absolute; right: 28%; top: 10px; width: 42px; height: 110px; background: linear-gradient(180deg, #7ba4f0 0%, #4a79e0 100%); border-radius: 40px; transform: rotate(35deg); opacity: 0.9; z-index: 1; pointer-events: none;"></div>

        {{-- Main hero content --}}
        <div style="position: relative; z-index: 10; max-width: 1100px; margin: 0 auto; padding: 32px 60px 0 60px;">

            {{-- Breadcrumb --}}
            <div style="display: flex; align-items: center; gap: 6px; font-size: 12px; color: #4a6891; font-weight: 500; margin-bottom: 18px; flex-wrap: wrap;">

                <a href="{{ route('home') }}"
                   style="color: #4a6891; text-decoration: none; transition: color 0.2s;"
                   onmouseover="this.style.color='#1d4fbb'"
                   onmouseout="this.style.color='#4a6891'">
                    Beranda
                </a>

                <span style="color: #a0b0cc;">›</span>

                <a href="{{ route('proker') }}"
                   style="color: #4a6891; text-decoration: none; transition: color 0.2s;"
                   onmouseover="this.style.color='#1d4fbb'"
                   onmouseout="this.style.color='#4a6891'">
                    Program Kerja
                </a>

                <span style="color: #a0b0cc;">›</span>

                <a href="{{ route('view-proker') }}"
                   style="color: #4a6891; text-decoration: none; transition: color 0.2s;"
                   onmouseover="this.style.color='#1d4fbb'"
                   onmouseout="this.style.color='#4a6891'">
                    {{ $namaDivisi }}
                </a>

                <span style="color: #a0b0cc;">›</span>

                <span style="color: #1a2744; font-weight: 600;">
                    {{ $proker->nama }}
                </span>

            </div>

            {{-- Back Button --}}
            <div style="margin-bottom: 20px;">

                <a href="{{ route('view-proker') }}"
                   style="display: inline-flex; align-items: center; gap: 7px; font-size: 12px; font-weight: 700; color: #1d4fbb; text-decoration: none; border: 1.5px solid #c4d4f5; border-radius: 999px; padding: 7px 16px; background: rgba(255,255,255,0.75); backdrop-filter: blur(4px); transition: all 0.2s;"
                   onmouseover="this.style.background='#eef3ff'; this.style.borderColor='#1d4fbb';"
                   onmouseout="this.style.background='rgba(255,255,255,0.75)'; this.style.borderColor='#c4d4f5';">

                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                    </svg>

                    Kembali ke daftar program

                </a>

            </div>

        </div>


        {{-- Two-column hero content --}}
        <div style="position: relative; z-index: 10; max-width: 1100px; margin: 0 auto; padding: 0 60px 0 60px; display: flex; flex-direction: row; align-items: flex-start; justify-content: space-between; gap: 32px;">

            {{-- Left: Text Content --}}
            <div style="flex: 1; min-width: 0; padding-left: 60px; padding-bottom: 40px;">

                {{-- Division Badge --}}
                <div style="margin-bottom: 14px;">

                    <span style="
                        display: inline-block;
                        background: {{ $divisiColor }};
                        color: #fff;
                        font-size: 11px;
                        font-weight: 800;
                        padding: 4px 14px;
                        border-radius: 999px;
                        letter-spacing: 0.8px;
                        text-transform: uppercase;
                    ">
                        {{ $namaDivisi }}
                    </span>

                </div>

                {{-- Main Title --}}
                <h1 style="
                    font-size: clamp(36px, 5vw, 62px);
                    font-weight: 900;
                    line-height: 1.05;
                    margin: 0 0 6px 0;
                    padding: 0;
                    color: #1a1a2e;
                    letter-spacing: -1px;
                    text-transform: uppercase;
                ">
                    {{ $proker->nama }}
                </h1>

                {{-- Description --}}
                <p style="font-size: 14px; font-weight: 500; color: #2d3748; line-height: 1.75; max-width: 430px; margin: 0 0 28px 0;">
                    {{ $proker->deskripsi }}
                </p>

                {{-- Info Pills Row --}}
                <div style="display: flex; flex-wrap: wrap; gap: 10px;">

                    {{-- Date --}}
                    <div style="display: flex; align-items: center; gap: 8px; background: #fff; border: 1.5px solid #dbe8ff; border-radius: 12px; padding: 10px 16px; box-shadow: 0 2px 8px rgba(29,79,187,0.07);">

                        <svg width="16" height="16" fill="none" stroke="#1d4fbb" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>

                        <div>
                            <div style="font-size: 11px; font-weight: 800; color: #1a2744; line-height: 1.2;">
                                {{ \Carbon\Carbon::parse($proker->tanggal_berlangsung)->locale('id')->translatedFormat('d F Y') }}
                            </div>

                            <div style="font-size: 10px; color: #6b7a99; font-weight: 500; margin-top: 1px;">
                                {{ \Carbon\Carbon::parse($proker->tanggal_berlangsung)->locale('id')->translatedFormat('l') }}
                            </div>
                        </div>

                    </div>


                    {{-- Location --}}
                    <div style="display: flex; align-items: center; gap: 8px; background: #fff; border: 1.5px solid #dbe8ff; border-radius: 12px; padding: 10px 16px; box-shadow: 0 2px 8px rgba(29,79,187,0.07);">

                        <svg width="16" height="16" fill="none" stroke="#1d4fbb" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>

                        <div>
                            <div style="font-size: 11px; font-weight: 800; color: #1a2744; line-height: 1.2;">
                                {{ $proker->lokasi }}
                            </div>

                            <div style="font-size: 10px; color: #6b7a99; font-weight: 500; margin-top: 1px;">
                                Lokasi Kegiatan
                            </div>
                        </div>

                    </div>


                    {{-- Participants --}}
                    <div style="display: flex; align-items: center; gap: 8px; background: #fff; border: 1.5px solid #dbe8ff; border-radius: 12px; padding: 10px 16px; box-shadow: 0 2px 8px rgba(29,79,187,0.07);">

                        <svg width="16" height="16" fill="none" stroke="#1d4fbb" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 005.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>

                        <div>
                            <div style="font-size: 11px; font-weight: 800; color: #1a2744; line-height: 1.2;">
                                {{ number_format($proker->peserta, 0, ',', '.') }} Peserta
                            </div>

                            <div style="font-size: 10px; color: #6b7a99; font-weight: 500; margin-top: 1px;">
                                Kehadiran
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            {{-- Right: Hero Image --}}
            <div style="
                flex-shrink: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 0px 20px 40px 0px;
            ">

                @if($proker->foto && $proker->foto !== 'belumada')

                    <img 
                        src="{{ asset('assets/images/proker/' . $proker->foto . '.webp') }}" 
                        alt="{{ $proker->nama }}" 
                        style="
                            width: 390px;
                            height: 290px;
                            object-fit: cover;
                            border-radius: 20px 20px 20px 0;
                            box-shadow: 8px 12px 28px rgba(0, 40, 120, 0.18);
                            display: block;
                        "
                    >

                @else

                    <div style="
                        width: 290px;
                        height: 190px;
                        border-radius: 20px 20px 20px 0;
                        background: #dbe8ff;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        color: #6b7a99;
                        font-size: 13px;
                        font-weight: 600;
                        text-align: center;
                    ">
                        Belum ada foto kegiatan
                    </div>

                @endif

            </div>

        </div>

    </section>

    {{-- Footer --}}
    <x-footer />

</div>

@endsection