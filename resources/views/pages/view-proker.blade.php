@extends('layouts.app')

@section('title', 'Program Kerja — UKMFT-ITC')

@section('content')
<div style="font-family: 'Poppins', sans-serif; min-height: 100vh; background: #f0f5ff; overflow-x: hidden;">

    {{-- Navbar --}}
    <x-navbar />

    {{-- ====== HERO BANNER ====== --}}
    <section style="position: relative; background: linear-gradient(135deg, #e8f0ff 0%, #f0f6ff 50%, #e4eeff 100%); overflow: hidden; padding-top: 80px; padding-bottom: 0;">

        {{-- Dot Matrix Left --}}
        <div style="position: absolute; left: 60px; top: 50%; transform: translateY(-50%); display: grid; grid-template-columns: repeat(5, 1fr); gap: 10px; opacity: 0.5; z-index: 1;">
            @for ($i = 0; $i < 25; $i++)
                <div style="width: 7px; height: 7px; border-radius: 50%; background: #7ba4f0;"></div>
            @endfor
        </div>

        {{-- Left Solid Semicircle --}}
        <div style="position: absolute; left: -70px; bottom: -20px; width: 200px; height: 200px; border-radius: 50%; background: #3b6fd4; opacity: 0.85; z-index: 1;"></div>

        {{-- Top-right pill/teardrop decoration --}}
        <div style="position: absolute; right: 28%; top: 10px; width: 42px; height: 110px; background: linear-gradient(180deg, #7ba4f0 0%, #4a79e0 100%); border-radius: 40px; transform: rotate(35deg); opacity: 0.9; z-index: 1;"></div>

        {{-- Main hero content --}}
        <div style="position: relative; z-index: 10; max-width: 1100px; margin: 0 auto; padding: 40px 60px 50px 60px; display: flex; flex-direction: row; align-items: flex-start; justify-content: space-between; gap: 32px;">

            {{-- Left: Text --}}
            <div style="flex: 1; min-width: 0; padding-left: 60px;">
                <h1 style="font-size: 62px; font-weight: 900; line-height: 1.05; margin: 0; padding: 0; color: #1a1a2e; letter-spacing: -1px;">
                    PROGRAM KERJA
                </h1>
                <h1 style="font-size: 72px; font-weight: 900; line-height: 1.0; margin: 0 0 28px 0; padding: 0; color: #1d4fbb; letter-spacing: -1px;">
                    UKMFT-ITC
                </h1>
                <p style="font-size: 15px; font-weight: 500; color: #2d3748; line-height: 1.75; max-width: 430px; margin: 0;">
                    Program kerja UKMFT-ITC dirancang untuk mengembangkan
                    potensi anggota melalui kegiatan yang inovatif, kolaboratif,
                    dan berdampak positif.
                </p>
            </div>

            {{-- Right: Image --}}
            <div style="flex-shrink: 0; display: flex; align-items: flex-start; justify-content: flex-end; padding-right: 20px; padding-top: 10px;">
                <img
                     src="{{ asset('assets/images/profile-1.jpg') }}"
                     onerror="this.src='https://images.unsplash.com/photo-1531482615713-2afd69097998?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'"
                     alt="Meeting Proker"
                     style="width: 370px; height: 257px; object-fit: cover; border-radius: 20px 20px 20px 0; box-shadow: 8px 12px 28px rgba(0, 40, 120, 0.18); display: block;">
            </div>
        </div>

        {{-- Stats Cards Row --}}
        <div style="position: relative; z-index: 10; max-width: 1100px; margin: 0 auto; padding: 0 60px 40px 60px;">
            <div style="display: flex; flex-direction: row; gap: 16px; flex-wrap: wrap;">

                <div style="background:#fff;border:1.5px solid #dbe8ff;border-radius:14px;padding:14px 18px;display:flex;align-items:center;gap:14px;box-shadow:0 4px 16px rgba(29,79,187,0.09);flex:1;min-width:140px;">
                    <div style="width:46px;height:46px;background:linear-gradient(135deg,#2563eb,#1d4fbb);border-radius:12px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="24" height="24" fill="white" viewBox="0 0 20 20"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/></svg>
                    </div>
                    <div><div style="font-size:26px;font-weight:900;color:#2563eb;line-height:1;">{{ $jumlahDivisi }}</div><div style="font-size:11px;font-weight:700;color:#1a2744;line-height:1.3;margin-top:3px;">Divisi<br>Aktif</div></div>
                </div>

                <div style="background:#fff;border:1.5px solid #dbe8ff;border-radius:14px;padding:14px 18px;display:flex;align-items:center;gap:14px;box-shadow:0 4px 16px rgba(29,79,187,0.09);flex:1;min-width:140px;">
                    <div style="width:46px;height:46px;background:linear-gradient(135deg,#2563eb,#1d4fbb);border-radius:12px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="24" height="24" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                    </div>
                    <div><div style="font-size:26px;font-weight:900;color:#2563eb;line-height:1;">{{ $jumlahProker }}</div><div style="font-size:11px;font-weight:700;color:#1a2744;line-height:1.3;margin-top:3px;">Program Kerja<br><span style="font-weight:400;font-size:10px;">Tiap Tahun</span></div></div>
                </div>

                <div style="background:#fff;border:1.5px solid #dbe8ff;border-radius:14px;padding:14px 18px;display:flex;align-items:center;gap:14px;box-shadow:0 4px 16px rgba(29,79,187,0.09);flex:1;min-width:140px;">
                    <div style="width:46px;height:46px;background:linear-gradient(135deg,#1d50b3,#0e3590);border-radius:12px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="24" height="24" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    </div>
                    <div><div style="font-size:26px;font-weight:900;color:#2563eb;line-height:1;">{{ $jumlahKegiatan }}</div><div style="font-size:11px;font-weight:700;color:#1a2744;line-height:1.3;margin-top:3px;">Kegiatan<br><span style="font-weight:400;font-size:10px;">Terlaksana</span></div></div>
                </div>

                <div style="background:#fff;border:1.5px solid #dbe8ff;border-radius:14px;padding:14px 18px;display:flex;align-items:center;gap:14px;box-shadow:0 4px 16px rgba(29,79,187,0.09);flex:1;min-width:140px;">
                    <div style="width:46px;height:46px;background:linear-gradient(135deg,#1d50b3,#0e3590);border-radius:12px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="24" height="24" fill="white" viewBox="0 0 20 20"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/></svg>
                    </div>
                    <div><div style="font-size:26px;font-weight:900;color:#2563eb;line-height:1;">{{ $totalPeserta }}</div><div style="font-size:11px;font-weight:700;color:#1a2744;line-height:1.3;margin-top:3px;">Anggota<br><span style="font-weight:400;font-size:10px;">Terlibat</span></div></div>
                </div>

                <div style="background:#fff;border:1.5px solid #dbe8ff;border-radius:14px;padding:14px 18px;display:flex;align-items:center;gap:14px;box-shadow:0 4px 16px rgba(29,79,187,0.09);flex:1;min-width:140px;">
                    <div style="width:46px;height:46px;background:linear-gradient(135deg,#0e3590,#0a2670);border-radius:12px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="24" height="24" fill="white" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/></svg>
                    </div>
                    <div><div style="font-size:26px;font-weight:900;color:#2563eb;line-height:1;">{{ $jumlahDokumentasi }}</div><div style="font-size:11px;font-weight:700;color:#1a2744;line-height:1.3;margin-top:3px;">Dokumentasi<br><span style="font-weight:400;font-size:10px;">Kegiatan</span></div></div>
                </div>

            </div>
        </div>
    </section>

    {{-- ====== DAFTAR PROKER SECTION ====== --}}
    <section style="max-width: 1200px; margin: 0 auto; padding: 48px 40px 80px 40px;">
        <div style="display: flex; gap: 28px; align-items: flex-start;">

            {{-- ---- LEFT SIDEBAR ---- --}}
            <div style="flex-shrink: 0; width: 200px; display: flex; flex-direction: column; gap: 12px;">

                {{-- Division Tabs --}}
                <div style="background: #fff; border-radius: 16px; padding: 12px; box-shadow: 0 2px 12px rgba(29,79,187,0.08); border: 1.5px solid #dbe8ff;">

                    <button onclick="filterDivisi('semua')" id="tab-semua"
                        style="width:100%;display:flex;align-items:center;gap:10px;padding:10px 14px;border-radius:10px;border:none;cursor:pointer;font-family:'Poppins',sans-serif;font-size:13px;font-weight:700;background:#1d4fbb;color:#fff;margin-bottom:4px;transition:all 0.2s;">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 20 20"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                        Semua Program
                    </button>

                    @php
                        $divisiList = [
                            ['key' => 'Litbang', 'label' => 'LITBANG', 'icon' => '</>'],
                            ['key' => 'Humas',   'label' => 'HUMAS',   'icon' => '📢'],
                            ['key' => 'P&K',     'label' => 'P&K',     'icon' => '📚'],
                            ['key' => 'PSDM',    'label' => 'PSDM',    'icon' => '🤝'],
                            ['key' => 'Infokom', 'label' => 'INFOKOM', 'icon' => '🎨'],
                        ];
                    @endphp

                    @foreach($divisiList as $div)
                    <button onclick="filterDivisi('{{ $div['key'] }}')" id="tab-{{ $div['key'] }}"
                        style="width:100%;display:flex;align-items:center;gap:10px;padding:10px 14px;border-radius:10px;border:none;cursor:pointer;font-family:'Poppins',sans-serif;font-size:13px;font-weight:600;background:transparent;color:#2d3748;margin-bottom:2px;transition:all 0.2s;"
                        onmouseover="if(this.dataset.active!='1') this.style.background='#eef3ff'"
                        onmouseout="if(this.dataset.active!='1') this.style.background='transparent'">
                        <span style="width:28px;height:28px;background:#eef3ff;border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:12px;font-weight:700;color:#1d4fbb;flex-shrink:0;">{{ $div['icon'] }}</span>
                        {{ $div['label'] }}
                    </button>
                    @endforeach
                </div>

                {{-- Filter Panel --}}
                <div style="background:#fff;border-radius:16px;padding:16px;box-shadow:0 2px 12px rgba(29,79,187,0.08);border:1.5px solid #dbe8ff;">
                    <div style="font-size:13px;font-weight:800;color:#1a2744;margin-bottom:12px;">Filter Program</div>

                    <div style="margin-bottom:10px;">
                        <select id="filter-divisi-select" onchange="applyFilter()"
                            style="width:100%;font-family:'Poppins',sans-serif;font-size:12px;padding:9px 12px;border:1.5px solid #dbe8ff;border-radius:10px;color:#2d3748;background:#f8faff;outline:none;cursor:pointer;">
                            <option value="">Semua Divisi</option>
                            <option value="Litbang">LITBANG</option>
                            <option value="Humas">HUMAS</option>
                            <option value="P&K">P&K</option>
                            <option value="PSDM">PSDM</option>
                            <option value="Infokom">INFOKOM</option>
                        </select>
                    </div>

                    <div style="margin-bottom:14px;">
                        <select id="filter-tahun-select" onchange="applyFilter()"
                            style="width:100%;font-family:'Poppins',sans-serif;font-size:12px;padding:9px 12px;border:1.5px solid #dbe8ff;border-radius:10px;color:#2d3748;background:#f8faff;outline:none;cursor:pointer;">
                            <option value="">Semua Tahun</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                        </select>
                    </div>

                    <button onclick="applyFilter()"
                        style="width:100%;display:flex;align-items:center;justify-content:center;gap:8px;padding:10px;border-radius:10px;border:none;background:#eef3ff;color:#1d4fbb;font-family:'Poppins',sans-serif;font-size:13px;font-weight:700;cursor:pointer;transition:all 0.2s;"
                        onmouseover="this.style.background='#dbeafe'" onmouseout="this.style.background='#eef3ff'">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-.293.707L13 13.414V19a1 1 0 01-.553.894l-4 2A1 1 0 017 21v-7.586L3.293 6.707A1 1 0 013 6V4z"/></svg>
                        Terapkan Filter
                    </button>
                </div>
            </div>

            {{-- ---- RIGHT CONTENT ---- --}}
            <div style="flex: 1; min-width: 0;">

                {{-- Header + Search --}}
                <div style="display:flex;align-items:flex-start;justify-content:space-between;margin-bottom:20px;gap:16px;flex-wrap:wrap;">
                    <div>
                        <h2 style="font-size:24px;font-weight:900;color:#1a2744;margin:0 0 4px 0;">Daftar Program Kerja</h2>
                        <p style="font-size:13px;color:#6b7a99;margin:0;">Pilih program kerja untuk melihat detail kegiatan</p>
                    </div>
                    <div style="position:relative;">
                        <svg style="position:absolute;left:12px;top:50%;transform:translateY(-50%);color:#9aa8c0;" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M17 11A6 6 0 115 11a6 6 0 0112 0z"/></svg>
                        <input type="text" id="search-input" oninput="applyFilter()" placeholder="Cari program kerja...."
                            style="font-family:'Poppins',sans-serif;font-size:13px;padding:10px 16px 10px 36px;border:1.5px solid #dbe8ff;border-radius:999px;outline:none;background:#fff;color:#1a2744;width:220px;">
                    </div>
                </div>

                {{-- Cards Grid --}}
                <div id="proker-grid" style="display:grid;grid-template-columns:repeat(2,1fr);gap:20px;">
                    @php
                        $colorMap = [
                            'Litbang' => '#2563eb',
                            'P&K'     => '#0891b2',
                            'PSDM'    => '#7c3aed',
                            'Infokom' => '#d97706',
                            'Humas'   => '#16a34a',
                            'BPH'     => '#dc2626'
                        ];
                    @endphp

                    @foreach($proker as $p)
                    @php
                        $namaDivisi = $p->divisi ? $p->divisi->nama_divisi : 'Umum';
                        $divisiColor = $colorMap[$namaDivisi] ?? '#2563eb';
                        $tahun = $p->tanggal_berlangsung ? \Carbon\Carbon::parse($p->tanggal_berlangsung)->format('Y') : '2026';
                        $tanggalFormatted = $p->tanggal_berlangsung ? \Carbon\Carbon::parse($p->tanggal_berlangsung)->translatedFormat('d M Y') : '-';
                        
                        // Gambar Handling
                        $imgSrc = asset('assets/images/proker/' . $p->foto . '.webp');
                    @endphp

                    <div class="proker-card"
                         data-divisi="{{ $namaDivisi }}"
                         data-tahun="{{ $tahun }}"
                         data-judul="{{ strtolower($p->nama) }}"
                         style="background:#fff;border:1.5px solid #e2ecff;border-radius:16px;overflow:hidden;box-shadow:0 3px 14px rgba(29,79,187,0.08);display:flex;flex-direction:row;transition:box-shadow 0.2s;"
                         onmouseover="this.style.boxShadow='0 8px 28px rgba(29,79,187,0.15)'"
                         onmouseout="this.style.boxShadow='0 3px 14px rgba(29,79,187,0.08)'">

                        {{-- Card Left: Text --}}
                        <div style="flex:1;padding:18px 16px;display:flex;flex-direction:column;min-width:0;">
                            <span style="display:inline-block;background:{{ $divisiColor }};color:#fff;font-size:10px;font-weight:800;padding:3px 10px;border-radius:999px;margin-bottom:8px;letter-spacing:0.5px;width:fit-content;">{{ strtoupper($namaDivisi) }}</span>
                            <h3 style="font-size:15px;font-weight:800;color:{{ $divisiColor }};margin:0 0 7px 0;line-height:1.3;">{{ $p->nama }}</h3>
                            <p style="font-size:12px;color:#5a6a8a;line-height:1.6;margin:0 0 12px 0;flex:1;">{{ $p->deskripsi }}</p>

                            <div style="display:flex;flex-direction:column;gap:5px;margin-bottom:12px;">
                                <span style="font-size:11px;color:#6b7a99;display:flex;align-items:center;gap:6px;">
                                    <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    {{ $tanggalFormatted }}
                                </span>
                                <span style="font-size:11px;color:#6b7a99;display:flex;align-items:center;gap:6px;">
                                    <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    {{ $p->lokasi }}
                                </span>
                                <span style="font-size:11px;color:#6b7a99;display:flex;align-items:center;gap:6px;">
                                    <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    {{ $p->peserta }} Peserta
                                </span>
                            </div>

                            <a href="{{ route('detail-proker', $p->id) }}" style="display:inline-flex;align-items:center;gap:6px;font-size:12px;font-weight:700;color:#1d4fbb;text-decoration:none;border:1.5px solid #1d4fbb;border-radius:8px;padding:7px 14px;width:fit-content;transition:all 0.2s;"
                               onmouseover="this.style.background='#1d4fbb';this.style.color='#fff'"
                               onmouseout="this.style.background='transparent';this.style.color='#1d4fbb'">
                                Lihat Detail
                                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>

                        {{-- Card Right: Image --}}
                        <div style="flex-shrink:0;width:140px;min-height:100%;overflow:hidden;">
                            <img
                                src="{{ $imgSrc }}"
                                alt="{{ $p->nama }}"
                                style="width:100%;height:100%;object-fit:cover;display:block;min-height:200px;">
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Empty State --}}
                <div id="empty-state" style="display:none;text-align:center;padding:60px 20px;color:#9aa8c0;">
                    <svg width="56" height="56" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="margin:0 auto 16px;opacity:0.4;"><path stroke-linecap="round" stroke-linejoin="round" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <p style="font-size:15px;font-weight:600;">Tidak ada program kerja ditemukan.</p>
                </div>

            </div>
        </div>
    </section>
</div>

<x-footer />

{{-- ====== JAVASCRIPT FILTER ====== --}}
<script>
    let activeDivisi = 'semua';

    function filterDivisi(key) {
        activeDivisi = key;

        // Update tab styles
        const tabs = ['semua','Litbang','Humas','P&K','PSDM','Infokom'];
        tabs.forEach(t => {
            const el = document.getElementById('tab-' + t);
            if (!el) return;
            if (t === key) {
                el.style.background = '#1d4fbb';
                el.style.color = '#fff';
                el.dataset.active = '1';
            } else {
                el.style.background = 'transparent';
                el.style.color = '#2d3748';
                el.dataset.active = '0';
            }
        });

        // Sync dropdown
        const sel = document.getElementById('filter-divisi-select');
        sel.value = key === 'semua' ? '' : key;

        applyFilter();
    }

    function applyFilter() {
        const searchVal = document.getElementById('search-input').value.toLowerCase().trim();
        const divisiSel  = document.getElementById('filter-divisi-select').value;
        const tahunSel   = document.getElementById('filter-tahun-select').value;

        if (divisiSel !== '' && divisiSel !== activeDivisi) {
            activeDivisi = divisiSel;
            const tabs = ['semua','Litbang','Humas','P&K','PSDM','Infokom'];
            tabs.forEach(t => {
                const el = document.getElementById('tab-' + t);
                if (!el) return;
                el.style.background = (t === activeDivisi) ? '#1d4fbb' : 'transparent';
                el.style.color      = (t === activeDivisi) ? '#fff'    : '#2d3748';
                el.dataset.active   = (t === activeDivisi) ? '1' : '0';
            });
        } else if (divisiSel === '') {
            activeDivisi = 'semua';
        }

        const cards = document.querySelectorAll('.proker-card');
        let visible = 0;

        cards.forEach(card => {
            const matchDivisi  = (activeDivisi === 'semua') || (card.dataset.divisi === activeDivisi);
            const matchTahun   = !tahunSel   || (card.dataset.tahun === tahunSel);
            const matchSearch  = !searchVal  || card.dataset.judul.includes(searchVal);

            if (matchDivisi && matchTahun && matchSearch) {
                card.style.display = 'flex';
                visible++;
            } else {
                card.style.display = 'none';
            }
        });

        document.getElementById('empty-state').style.display = visible === 0 ? 'block' : 'none';
    }
</script>
@endsection