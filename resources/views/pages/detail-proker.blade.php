@extends('layouts.app')

@section('title', $proker['judul'] . ' — UKM FT ITC')

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
                <a href="{{ route('home') }}" style="color: #4a6891; text-decoration: none; transition: color 0.2s;"
                   onmouseover="this.style.color='#1d4fbb'" onmouseout="this.style.color='#4a6891'">Beranda</a>
                <span style="color: #a0b0cc;">›</span>
                <a href="{{ route('proker') }}" style="color: #4a6891; text-decoration: none; transition: color 0.2s;"
                   onmouseover="this.style.color='#1d4fbb'" onmouseout="this.style.color='#4a6891'">Program Kerja</a>
                <span style="color: #a0b0cc;">›</span>
                <a href="{{ route('view-proker') }}" style="color: #4a6891; text-decoration: none; transition: color 0.2s;"
                   onmouseover="this.style.color='#1d4fbb'" onmouseout="this.style.color='#4a6891'">{{ $proker['divisi'] }}</a>
                <span style="color: #a0b0cc;">›</span>
                <span style="color: #1a2744; font-weight: 600;">{{ $proker['judul'] }}</span>
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

        {{-- Two-column hero content (Text + Image) --}}
        <div style="position: relative; z-index: 10; max-width: 1100px; margin: 0 auto; padding: 0 60px 0 60px; display: flex; flex-direction: row; align-items: flex-start; justify-content: space-between; gap: 32px;">

            {{-- Left: Text Content --}}
            <div style="flex: 1; min-width: 0; padding-left: 60px; padding-bottom: 40px;">

                {{-- Division Badge --}}
                <div style="margin-bottom: 14px;">
                    <span style="
                        display: inline-block;
                        background: {{ $proker['divisiColor'] }};
                        color: #fff;
                        font-size: 11px;
                        font-weight: 800;
                        padding: 4px 14px;
                        border-radius: 999px;
                        letter-spacing: 0.8px;
                        text-transform: uppercase;
                    ">{{ $proker['divisi'] == 'PK' ? 'P&K' : $proker['divisi'] }}</span>
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
                    {{ strtoupper(explode(' ', $proker['judul'])[0]) }}
                </h1>
                <h1 style="
                    font-size: clamp(36px, 5vw, 62px);
                    font-weight: 900;
                    line-height: 1.0;
                    margin: 0 0 20px 0;
                    padding: 0;
                    color: {{ $proker['divisiColor'] }};
                    letter-spacing: -1px;
                    text-transform: uppercase;
                ">
                    {{ strtoupper(implode(' ', array_slice(explode(' ', $proker['judul']), 1))) }}
                </h1>

                {{-- Description --}}
                <p style="font-size: 14px; font-weight: 500; color: #2d3748; line-height: 1.75; max-width: 430px; margin: 0 0 28px 0;">
                    {{ $proker['deskripsi_panjang'] ?? $proker['deskripsi'] }}
                </p>

                {{-- Info Pills Row --}}
                <div style="display: flex; flex-wrap: wrap; gap: 10px;">

                    {{-- Date --}}
                    <div style="display: flex; align-items: center; gap: 8px; background: #fff; border: 1.5px solid #dbe8ff; border-radius: 12px; padding: 10px 16px; box-shadow: 0 2px 8px rgba(29,79,187,0.07);">
                        <svg width="16" height="16" fill="none" stroke="#1d4fbb" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <div>
                            <div style="font-size: 11px; font-weight: 800; color: #1a2744; line-height: 1.2;">{{ $proker['tanggal'] }}</div>
                            <div style="font-size: 10px; color: #6b7a99; font-weight: 500; margin-top: 1px;">{{ $proker['hari'] ?? 'Sabtu' }}</div>
                        </div>
                    </div>

                    {{-- Location --}}
                    <div style="display: flex; align-items: center; gap: 8px; background: #fff; border: 1.5px solid #dbe8ff; border-radius: 12px; padding: 10px 16px; box-shadow: 0 2px 8px rgba(29,79,187,0.07);">
                        <svg width="16" height="16" fill="none" stroke="#1d4fbb" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <div>
                            <div style="font-size: 11px; font-weight: 800; color: #1a2744; line-height: 1.2;">{{ $proker['lokasi'] }}</div>
                            <div style="font-size: 10px; color: #6b7a99; font-weight: 500; margin-top: 1px;">{{ $proker['gedung'] ?? 'Gedung Fakultas Teknik' }}</div>
                        </div>
                    </div>

                    {{-- Participants --}}
                    <div style="display: flex; align-items: center; gap: 8px; background: #fff; border: 1.5px solid #dbe8ff; border-radius: 12px; padding: 10px 16px; box-shadow: 0 2px 8px rgba(29,79,187,0.07);">
                        <svg width="16" height="16" fill="none" stroke="#1d4fbb" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <div>
                            <div style="font-size: 11px; font-weight: 800; color: #1a2744; line-height: 1.2;">{{ $proker['peserta'] }} Peserta</div>
                            <div style="font-size: 10px; color: #6b7a99; font-weight: 500; margin-top: 1px;">{{ $proker['kategori_peserta'] ?? 'Mahasiswa Aktif' }}</div>
                        </div>
                    </div>

                    {{-- Time / Duration --}}
                    <div style="display: flex; align-items: center; gap: 8px; background: #fff; border: 1.5px solid #dbe8ff; border-radius: 12px; padding: 10px 16px; box-shadow: 0 2px 8px rgba(29,79,187,0.07);">
                        <svg width="16" height="16" fill="none" stroke="#1d4fbb" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                        <div>
                            <div style="font-size: 11px; font-weight: 800; color: #1a2744; line-height: 1.2;">{{ $proker['waktu'] ?? '08.00 - 15.00 WIB' }}</div>
                            <div style="font-size: 10px; color: #6b7a99; font-weight: 500; margin-top: 1px;">{{ $proker['durasi'] ?? '1 Hari Kegiatan' }}</div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Right: Hero Image --}}
            <div style="flex-shrink: 0; display: flex; align-items: flex-end; justify-content: flex-end; padding-right: 20px; align-self: flex-end;">
                <img src="{{ $proker['img'] }}"
                     onerror="this.src='https://images.unsplash.com/photo-1531482615713-2afd69097998?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'"
                     alt="{{ $proker['judul'] }}"
                     style="
                         width: 290px;
                         height: 190px;
                         object-fit: cover;
                         border-radius: 20px 20px 20px 0;
                         box-shadow: 8px 12px 28px rgba(0, 40, 120, 0.18);
                         display: block;
                     ">
            </div>
        </div>
    </section>

    {{-- ====== DETAIL CONTENT SECTION ====== --}}
    @php
        /* Build the ordered list of sections that actually have data */
        $sections = [];
        if (!empty($proker['tentang']))    $sections[] = 'tentang';
        if (!empty($proker['materi']))     $sections[] = 'materi';
        if (!empty($proker['benefit']))    $sections[] = 'benefit';
        if (!empty($proker['jadwal']))     $sections[] = 'jadwal';
        if (!empty($proker['syarat']))     $sections[] = 'syarat';
        if (!empty($proker['dokumentasi'])) $sections[] = 'dokumentasi';

        $tabLabels = [
            'tentang'     => 'Tentang Program',
            'materi'      => 'Materi',
            'benefit'     => 'Benefit',
            'jadwal'      => 'Jadwal',
            'syarat'      => 'Persyaratan',
            'dokumentasi' => 'Dokumentasi Kegiatan',
        ];
    @endphp

    @if(count($sections) > 0)
    <div style="background: #fff; border-bottom: 1px solid #e2ecff; position: sticky; top: 0; z-index: 40;">
        <div style="max-width: 1100px; margin: 0 auto; padding: 0 120px;">
            <nav style="display: flex; gap: 0; overflow-x: auto; -ms-overflow-style: none; scrollbar-width: none;">
                @foreach($sections as $idx => $key)
                <button
                    onclick="switchTab('{{ $key }}')"
                    id="tab-btn-{{ $key }}"
                    style="
                        font-family: 'Poppins', sans-serif;
                        font-size: 13px;
                        font-weight: {{ $idx === 0 ? '700' : '600' }};
                        color: {{ $idx === 0 ? '#1d4fbb' : '#6b7a99' }};
                        padding: 16px 20px;
                        border: none;
                        background: transparent;
                        border-bottom: {{ $idx === 0 ? '2.5px solid #1d4fbb' : '2.5px solid transparent' }};
                        cursor: pointer;
                        white-space: nowrap;
                        transition: all 0.2s;
                    "
                    onmouseover="if(this.dataset.active!='1') { this.style.color='#1d4fbb'; }"
                    onmouseout="if(this.dataset.active!='1') { this.style.color='#6b7a99'; }"
                    data-active="{{ $idx === 0 ? '1' : '0' }}"
                >{{ $tabLabels[$key] }}</button>
                @endforeach
            </nav>
        </div>
    </div>

    <div style="max-width: 1100px; margin: 0 auto; padding: 40px 120px 80px 120px;">

        {{-- ====== TENTANG PROGRAM ====== --}}
        @if(!empty($proker['tentang']))
        <div id="panel-tentang" class="detail-panel">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 32px; align-items: start;">

                {{-- Left: About + Quote --}}
                <div style="background: #fff; border: 1.5px solid #e2ecff; border-radius: 18px; padding: 28px 28px 24px; box-shadow: 0 3px 16px rgba(29,79,187,0.06);">
                    <h2 style="font-size: 18px; font-weight: 800; color: #1d4fbb; margin: 0 0 14px 0;">Tentang Program</h2>
                    <p style="font-size: 13.5px; color: #374151; line-height: 1.8; margin: 0 0 20px 0;">{{ $proker['tentang'] }}</p>

                    @if(!empty($proker['kutipan']))
                    <div style="display: flex; align-items: flex-start; gap: 12px; background: #f4f8ff; border-radius: 12px; padding: 16px 18px; border-left: 3px solid #1d4fbb;">
                        <svg width="28" height="28" fill="#1d4fbb" viewBox="0 0 24 24" style="flex-shrink: 0; opacity: 0.5; margin-top: 2px;">
                            <path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"/>
                            <path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/>
                        </svg>
                        <p style="font-size: 13px; font-style: italic; color: #2563eb; font-weight: 600; margin: 0; line-height: 1.6;">{{ $proker['kutipan'] }}</p>
                    </div>
                    @endif
                </div>

                {{-- Right: Materi (shown here if present, as per screenshot layout) --}}
                @if(!empty($proker['materi']))
                <div style="background: #fff; border: 1.5px solid #e2ecff; border-radius: 18px; padding: 28px 28px 24px; box-shadow: 0 3px 16px rgba(29,79,187,0.06);">
                    <h2 style="font-size: 18px; font-weight: 800; color: #1d4fbb; margin: 0 0 16px 0;">Materi yang Dipelajari</h2>
                    <div style="display: flex; flex-direction: column; gap: 10px;">
                        @foreach($proker['materi'] as $item)
                        <div style="display: flex; align-items: center; gap: 10px;">
                            <div style="width: 20px; height: 20px; border-radius: 50%; background: #1d4fbb; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="11" height="11" fill="none" stroke="#fff" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span style="font-size: 13px; color: #374151; font-weight: 500;">{{ $item }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

            </div>
        </div>
        @endif

        {{-- ====== MATERI (standalone panel) ====== --}}
        @if(!empty($proker['materi']))
        <div id="panel-materi" class="detail-panel" style="display: none;">
            <div style="background: #fff; border: 1.5px solid #e2ecff; border-radius: 18px; padding: 28px 32px; box-shadow: 0 3px 16px rgba(29,79,187,0.06); max-width: 600px;">
                <h2 style="font-size: 18px; font-weight: 800; color: #1d4fbb; margin: 0 0 20px 0;">Materi yang Dipelajari</h2>
                <div style="display: flex; flex-direction: column; gap: 12px;">
                    @foreach($proker['materi'] as $item)
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <div style="width: 22px; height: 22px; border-radius: 50%; background: #1d4fbb; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg width="12" height="12" fill="none" stroke="#fff" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span style="font-size: 13.5px; color: #374151; font-weight: 500;">{{ $item }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        {{-- ====== BENEFIT ====== --}}
        @if(!empty($proker['benefit']))
        <div id="panel-benefit" class="detail-panel" style="display: none;">
            <div style="background: #fff; border: 1.5px solid #e2ecff; border-radius: 18px; padding: 28px 32px; box-shadow: 0 3px 16px rgba(29,79,187,0.06);">
                <h2 style="font-size: 18px; font-weight: 800; color: #1d4fbb; margin: 0 0 24px 0;">Benefit</h2>
                <div style="display: flex; flex-wrap: wrap; gap: 20px;">
                    @foreach($proker['benefit'] as $b)
                    <div style="display: flex; flex-direction: column; align-items: center; gap: 8px; min-width: 80px; text-align: center;">
                        <div style="width: 52px; height: 52px; border-radius: 14px; background: #eef3ff; display: flex; align-items: center; justify-content: center; border: 1.5px solid #dbe8ff;">
                            <span style="font-size: 22px; line-height: 1;">{{ $b['icon'] }}</span>
                        </div>
                        <div>
                            <div style="font-size: 12px; font-weight: 700; color: #1a2744; line-height: 1.3;">{{ $b['label'] }}</div>
                            @if(!empty($b['sub']))
                            <div style="font-size: 11px; color: #6b7a99; font-weight: 500; margin-top: 1px;">{{ $b['sub'] }}</div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        {{-- ====== JADWAL ====== --}}
        @if(!empty($proker['jadwal']))
        <div id="panel-jadwal" class="detail-panel" style="display: none;">
            <div style="background: #fff; border: 1.5px solid #e2ecff; border-radius: 18px; padding: 28px 32px; box-shadow: 0 3px 16px rgba(29,79,187,0.06);">
                <h2 style="font-size: 18px; font-weight: 800; color: #1d4fbb; margin: 0 0 20px 0;">Jadwal Kegiatan</h2>
                <div style="display: flex; flex-direction: column; gap: 0; position: relative;">
                    {{-- Vertical line --}}
                    <div style="position: absolute; left: 19px; top: 24px; bottom: 24px; width: 2px; background: linear-gradient(180deg, #1d4fbb 0%, #dbe8ff 100%); z-index: 0;"></div>
                    @foreach($proker['jadwal'] as $idx => $j)
                    <div style="display: flex; align-items: flex-start; gap: 16px; padding-bottom: {{ !$loop->last ? '20px' : '0' }}; position: relative; z-index: 1;">
                        <div style="width: 40px; height: 40px; border-radius: 50%; background: {{ $idx === 0 ? '#1d4fbb' : '#eef3ff' }}; border: 2px solid {{ $idx === 0 ? '#1d4fbb' : '#dbe8ff' }}; display: flex; align-items: center; justify-content: center; flex-shrink: 0; box-shadow: 0 2px 8px rgba(29,79,187,0.15);">
                            <span style="font-size: 12px; font-weight: 800; color: {{ $idx === 0 ? '#fff' : '#1d4fbb' }};">{{ $idx + 1 }}</span>
                        </div>
                        <div style="padding-top: 8px; flex: 1;">
                            <div style="font-size: 13px; font-weight: 700; color: #1a2744; margin-bottom: 2px;">{{ $j['waktu'] }}</div>
                            <div style="font-size: 13px; color: #374151; font-weight: 500;">{{ $j['kegiatan'] }}</div>
                            @if(!empty($j['keterangan']))
                            <div style="font-size: 11.5px; color: #6b7a99; margin-top: 2px;">{{ $j['keterangan'] }}</div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        {{-- ====== PERSYARATAN ====== --}}
        @if(!empty($proker['syarat']))
        <div id="panel-syarat" class="detail-panel" style="display: none;">
            <div style="background: #fff; border: 1.5px solid #e2ecff; border-radius: 18px; padding: 28px 32px; box-shadow: 0 3px 16px rgba(29,79,187,0.06); max-width: 600px;">
                <h2 style="font-size: 18px; font-weight: 800; color: #1d4fbb; margin: 0 0 18px 0;">Persyaratan</h2>
                <div style="display: flex; flex-direction: column; gap: 10px;">
                    @foreach($proker['syarat'] as $s)
                    <div style="display: flex; align-items: flex-start; gap: 10px; padding: 12px 16px; background: #f8faff; border-radius: 10px; border: 1px solid #e2ecff;">
                        <div style="width: 6px; height: 6px; border-radius: 50%; background: #1d4fbb; flex-shrink: 0; margin-top: 6px;"></div>
                        <span style="font-size: 13px; color: #374151; font-weight: 500; line-height: 1.6;">{{ $s }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        {{-- ====== DOKUMENTASI ====== --}}
        @if(!empty($proker['dokumentasi']))
        <div id="panel-dokumentasi" class="detail-panel" style="display: none;">
            <div>
                <h2 style="font-size: 18px; font-weight: 800; color: #1d4fbb; margin: 0 0 20px 0;">Dokumentasi</h2>
                <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 14px;">
                    @foreach($proker['dokumentasi'] as $dok)
                    <div style="border-radius: 14px; overflow: hidden; box-shadow: 0 3px 14px rgba(29,79,187,0.10); border: 1px solid #e2ecff; background: #fff; transition: transform 0.2s, box-shadow 0.2s;"
                         onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 10px 28px rgba(29,79,187,0.16)'"
                         onmouseout="this.style.transform=''; this.style.boxShadow='0 3px 14px rgba(29,79,187,0.10)'">
                        <img src="{{ $dok['img'] }}"
                             onerror="this.src='https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=800&q=80'"
                             alt="{{ $dok['caption'] ?? 'Dokumentasi' }}"
                             style="width: 100%; height: 150px; object-fit: cover; display: block;">
                        @if(!empty($dok['caption']))
                        <div style="padding: 10px 14px; font-size: 12px; color: #374151; font-weight: 500;">{{ $dok['caption'] }}</div>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        {{-- ====== BENEFIT also shown below Tentang in same panel (per screenshot) ====== --}}
        @if(!empty($proker['benefit']) && !empty($proker['tentang']))
        <div id="panel-tentang-benefit" style="margin-top: 24px;" class="detail-panel-benefit">
            <div style="background: #fff; border: 1.5px solid #e2ecff; border-radius: 18px; padding: 24px 32px; box-shadow: 0 3px 16px rgba(29,79,187,0.06);">
                <h2 style="font-size: 18px; font-weight: 800; color: #1d4fbb; margin: 0 0 20px 0;">Benefit</h2>
                <div style="display: flex; flex-wrap: wrap; gap: 24px;">
                    @foreach($proker['benefit'] as $b)
                    <div style="display: flex; flex-direction: column; align-items: center; gap: 8px; min-width: 80px; text-align: center;">
                        <div style="width: 52px; height: 52px; border-radius: 14px; background: #eef3ff; display: flex; align-items: center; justify-content: center; border: 1.5px solid #dbe8ff;">
                            <span style="font-size: 22px; line-height: 1;">{{ $b['icon'] }}</span>
                        </div>
                        <div>
                            <div style="font-size: 12px; font-weight: 700; color: #1a2744; line-height: 1.3;">{{ $b['label'] }}</div>
                            @if(!empty($b['sub']))
                            <div style="font-size: 11px; color: #6b7a99; font-weight: 500; margin-top: 1px;">{{ $b['sub'] }}</div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

    </div>
    @endif

</div>

{{-- ====== DOKUMENTASI KEGIATAN SECTION ====== --}}
@if(!empty($proker['dokumentasi']))
<section style="
    background: linear-gradient(180deg, #f0f5ff 0%, #e8f0ff 100%);
    padding: 56px 0 72px;
    position: relative;
    overflow: hidden;
">
    {{-- Subtle background dots --}}
    <div style="position: absolute; right: 60px; top: 40px; display: grid; grid-template-columns: repeat(6, 1fr); gap: 10px; opacity: 0.25; pointer-events: none;">
        @for ($i = 0; $i < 30; $i++)
            <div style="width: 6px; height: 6px; border-radius: 50%; background: #3b6fd4;"></div>
        @endfor
    </div>

    <div style="max-width: 1100px; margin: 0 auto; padding: 0 120px;">

        {{-- Section Header --}}
        <div style="display: flex; align-items: flex-end; justify-content: space-between; margin-bottom: 28px; gap: 16px; flex-wrap: wrap;">
            <div>
                <div style="display: inline-flex; align-items: center; gap: 8px; background: #1d4fbb; color: #fff; font-size: 11px; font-weight: 800; padding: 5px 14px; border-radius: 999px; letter-spacing: 0.8px; text-transform: uppercase; margin-bottom: 10px;">
                    <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    Galeri
                </div>
                <h2 style="font-size: 26px; font-weight: 900; color: #1a2744; margin: 0; line-height: 1.2;">
                    Dokumentasi <span style="color: #1d4fbb;">Kegiatan</span>
                </h2>
                <p style="font-size: 13px; color: #6b7a99; font-weight: 500; margin: 6px 0 0 0;">
                    Rekam jejak kegiatan {{ $proker['judul'] }}
                </p>
            </div>

            {{-- View-all link --}}
            <a href="{{ route('view-dokumentasi') }}"
               style="display: inline-flex; align-items: center; gap: 7px; font-size: 13px; font-weight: 700; color: #1d4fbb; text-decoration: none; border: 1.5px solid #c4d4f5; border-radius: 999px; padding: 9px 20px; background: #fff; transition: all 0.2s; white-space: nowrap; box-shadow: 0 2px 8px rgba(29,79,187,0.07);"
               onmouseover="this.style.background='#eef3ff'; this.style.borderColor='#1d4fbb';"
               onmouseout="this.style.background='#fff'; this.style.borderColor='#c4d4f5';">
                Lihat Semua Dokumentasi
                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>

        {{-- Photo Grid — 3 columns, first image tall --}}
        @php $maxDok = min(6, count($proker['dokumentasi'])); @endphp
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); grid-auto-rows: 160px; gap: 14px; grid-auto-flow: dense;">
            @foreach(array_slice($proker['dokumentasi'], 0, $maxDok) as $idx => $dok)
            <div style="
                    border-radius: 14px;
                    overflow: hidden;
                    position: relative;
                    cursor: pointer;
                    box-shadow: 0 4px 18px rgba(29,79,187,0.10);
                    {{ $idx === 0 ? 'grid-row: span 2;' : '' }}
                    transition: transform 0.25s, box-shadow 0.25s;
                "
                 onmouseover="this.querySelector('.dok-overlay').style.opacity='1'; this.style.transform='translateY(-3px)'; this.style.boxShadow='0 12px 32px rgba(29,79,187,0.18)';"
                 onmouseout="this.querySelector('.dok-overlay').style.opacity='0'; this.style.transform=''; this.style.boxShadow='0 4px 18px rgba(29,79,187,0.10)';"
            >
                <img src="{{ $dok['img'] }}"
                     onerror="this.src='https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=800&q=80'"
                     alt="{{ $dok['caption'] ?? 'Dokumentasi' }}"
                     style="width: 100%; height: 100%; object-fit: cover; display: block;">

                {{-- Hover overlay with caption --}}
                <div class="dok-overlay" style="
                    position: absolute; inset: 0;
                    background: linear-gradient(180deg, transparent 40%, rgba(10,30,80,0.78) 100%);
                    opacity: 0;
                    transition: opacity 0.25s;
                    display: flex; align-items: flex-end; padding: 12px 14px;
                ">
                    @if(!empty($dok['caption']))
                    <span style="font-size: 12px; font-weight: 600; color: #fff; line-height: 1.4;">{{ $dok['caption'] }}</span>
                    @endif
                </div>
            </div>
            @endforeach
        </div>

        {{-- Photo count badge --}}
        @if(count($proker['dokumentasi']) > 6)
        <div style="text-align: center; margin-top: 20px;">
            <span style="font-size: 13px; color: #6b7a99; font-weight: 500;">
                Menampilkan 6 dari {{ count($proker['dokumentasi']) }} foto dokumentasi
            </span>
        </div>
        @endif

    </div>
</section>
@endif

<x-footer />

<script>
const allPanels = ['tentang','materi','benefit','jadwal','syarat','dokumentasi'];
const availableSections = @json($sections);

function switchTab(key) {
    // Update all tab buttons
    availableSections.forEach(s => {
        const btn = document.getElementById('tab-btn-' + s);
        if (!btn) return;
        const active = s === key;
        btn.style.color = active ? '#1d4fbb' : '#6b7a99';
        btn.style.borderBottom = active ? '2.5px solid #1d4fbb' : '2.5px solid transparent';
        btn.style.fontWeight = active ? '700' : '600';
        btn.dataset.active = active ? '1' : '0';
    });

    // Show/hide panels
    allPanels.forEach(s => {
        const panel = document.getElementById('panel-' + s);
        if (panel) panel.style.display = 'none';
    });

    // Hide the companion "benefit under tentang" block
    const tentangBenefit = document.getElementById('panel-tentang-benefit');

    if (key === 'tentang') {
        const p = document.getElementById('panel-tentang');
        if (p) p.style.display = 'block';
        if (tentangBenefit) tentangBenefit.style.display = 'block';
    } else {
        if (tentangBenefit) tentangBenefit.style.display = 'none';
        const p = document.getElementById('panel-' + key);
        if (p) p.style.display = 'block';
    }
}

// On load: activate first section
document.addEventListener('DOMContentLoaded', function() {
    if (availableSections.length > 0) {
        switchTab(availableSections[0]);
    }
});
</script>

@endsection
