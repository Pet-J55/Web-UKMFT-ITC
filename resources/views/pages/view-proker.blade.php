@extends('layouts.app')

@section('title', 'Program Kerja — UKM FT ITC')

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
                    UKM FT ITC
                </h1>
                <p style="font-size: 15px; font-weight: 500; color: #2d3748; line-height: 1.75; max-width: 430px; margin: 0;">
                    Program kerja UKM FT ITC dirancang untuk mengembangkan<br>
                    potensi anggota mealalui kegiatan yang inovatif, kolaboratif,<br>
                    dan berdampak positif.
                </p>
            </div>

            {{-- Right: Image --}}
            <div style="flex-shrink: 0; display: flex; align-items: flex-start; justify-content: flex-end; padding-right: 20px; padding-top: 10px;">
                <img src="{{ asset('assets/images/head-proker.png') }}"
                     onerror="this.src='https://images.unsplash.com/photo-1531482615713-2afd69097998?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'"
                     alt="Meeting Proker"
                     style="width: 235px; height: 157px; object-fit: cover; border-radius: 20px 20px 20px 0; box-shadow: 8px 12px 28px rgba(0, 40, 120, 0.18); display: block;">
            </div>
        </div>

        {{-- Stats Cards Row --}}
        <div style="position: relative; z-index: 10; max-width: 1100px; margin: 0 auto; padding: 0 60px 40px 60px;">
            <div style="display: flex; flex-direction: row; gap: 16px; flex-wrap: wrap;">

                {{-- Card 1: Divisi Aktif --}}
                <div style="background: #fff; border: 1.5px solid #dbe8ff; border-radius: 14px; padding: 14px 18px; display: flex; align-items: center; gap: 14px; box-shadow: 0 4px 16px rgba(29, 79, 187, 0.09); flex: 1; min-width: 140px;">
                    <div style="width: 46px; height: 46px; background: linear-gradient(135deg, #2563eb, #1d4fbb); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <svg width="24" height="24" fill="white" viewBox="0 0 20 20"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/></svg>
                    </div>
                    <div>
                        <div style="font-size: 26px; font-weight: 900; color: #2563eb; line-height: 1;">5</div>
                        <div style="font-size: 11px; font-weight: 700; color: #1a2744; line-height: 1.3; margin-top: 3px;">Divisi<br>Aktif</div>
                    </div>
                </div>

                {{-- Card 2: Program Kerja --}}
                <div style="background: #fff; border: 1.5px solid #dbe8ff; border-radius: 14px; padding: 14px 18px; display: flex; align-items: center; gap: 14px; box-shadow: 0 4px 16px rgba(29, 79, 187, 0.09); flex: 1; min-width: 140px;">
                    <div style="width: 46px; height: 46px; background: linear-gradient(135deg, #2563eb, #1d4fbb); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <svg width="24" height="24" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                    </div>
                    <div>
                        <div style="font-size: 26px; font-weight: 900; color: #2563eb; line-height: 1;">20+</div>
                        <div style="font-size: 11px; font-weight: 700; color: #1a2744; line-height: 1.3; margin-top: 3px;">Program Kerja<br><span style="font-weight: 400; font-size: 10px;">Tiap Tahun</span></div>
                    </div>
                </div>

                {{-- Card 3: Kegiatan --}}
                <div style="background: #fff; border: 1.5px solid #dbe8ff; border-radius: 14px; padding: 14px 18px; display: flex; align-items: center; gap: 14px; box-shadow: 0 4px 16px rgba(29, 79, 187, 0.09); flex: 1; min-width: 140px;">
                    <div style="width: 46px; height: 46px; background: linear-gradient(135deg, #1d50b3, #0e3590); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <svg width="24" height="24" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    </div>
                    <div>
                        <div style="font-size: 26px; font-weight: 900; color: #2563eb; line-height: 1;">50+</div>
                        <div style="font-size: 11px; font-weight: 700; color: #1a2744; line-height: 1.3; margin-top: 3px;">Kegiatan<br><span style="font-weight: 400; font-size: 10px;">Terlaksana</span></div>
                    </div>
                </div>

                {{-- Card 4: Anggota --}}
                <div style="background: #fff; border: 1.5px solid #dbe8ff; border-radius: 14px; padding: 14px 18px; display: flex; align-items: center; gap: 14px; box-shadow: 0 4px 16px rgba(29, 79, 187, 0.09); flex: 1; min-width: 140px;">
                    <div style="width: 46px; height: 46px; background: linear-gradient(135deg, #1d50b3, #0e3590); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <svg width="24" height="24" fill="white" viewBox="0 0 20 20"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/></svg>
                    </div>
                    <div>
                        <div style="font-size: 26px; font-weight: 900; color: #2563eb; line-height: 1;">100+</div>
                        <div style="font-size: 11px; font-weight: 700; color: #1a2744; line-height: 1.3; margin-top: 3px;">Anggota<br><span style="font-weight: 400; font-size: 10px;">Terlibat</span></div>
                    </div>
                </div>

                {{-- Card 5: Dokumentasi --}}
                <div style="background: #fff; border: 1.5px solid #dbe8ff; border-radius: 14px; padding: 14px 18px; display: flex; align-items: center; gap: 14px; box-shadow: 0 4px 16px rgba(29, 79, 187, 0.09); flex: 1; min-width: 140px;">
                    <div style="width: 46px; height: 46px; background: linear-gradient(135deg, #0e3590, #0a2670); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <svg width="24" height="24" fill="white" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/></svg>
                    </div>
                    <div>
                        <div style="font-size: 26px; font-weight: 900; color: #2563eb; line-height: 1;">500+</div>
                        <div style="font-size: 11px; font-weight: 700; color: #1a2744; line-height: 1.3; margin-top: 3px;">Dokumentasi<br><span style="font-weight: 400; font-size: 10px;">Kegiatan</span></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ====== DATA PROKER SECTION ====== --}}
    <section style="max-width: 1100px; margin: 0 auto; padding: 48px 60px 80px 60px;">

        {{-- Header + Filter --}}
        <div style="display: flex; flex-direction: row; align-items: center; justify-content: space-between; margin-bottom: 32px; gap: 16px; flex-wrap: wrap;">
            <h2 style="font-size: 28px; font-weight: 900; color: #1a2744; margin: 0;">Daftar Program Kerja</h2>

            <div style="display: flex; align-items: center; gap: 10px;">
                <input type="text" placeholder="Cari program kerja..."
                    style="font-size: 13px; padding: 9px 18px; border: 1.5px solid #dbe8ff; border-radius: 999px; outline: none; background: #fff; color: #1a2744; width: 210px;">
                <select style="font-size: 13px; padding: 9px 16px; border: 1.5px solid #dbe8ff; border-radius: 999px; outline: none; background: #fff; color: #1a2744;">
                    <option>Semua Divisi</option>
                    <option>LITBANG</option>
                    <option>HUMAS</option>
                    <option>P&K</option>
                    <option>PSDM</option>
                    <option>INFOKOM</option>
                </select>
            </div>
        </div>

        {{-- Grid Proker Dinamis --}}
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px;">

            {{-- Sample Card 1 --}}
            <div style="background: #fff; border: 1.5px solid #dbe8ff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 16px rgba(29,79,187,0.07); display: flex; flex-direction: column; transition: box-shadow 0.2s;">
                <div style="height: 160px; overflow: hidden; position: relative;">
                    <img src="https://images.unsplash.com/photo-1515162816999-a0c47dc192f7?auto=format&fit=crop&w=800&q=80" alt="Tech Workshop" style="width: 100%; height: 100%; object-fit: cover;">
                    <div style="position: absolute; top: 12px; left: 12px; background: #2563eb; color: #fff; font-size: 10px; font-weight: 700; text-transform: uppercase; padding: 4px 12px; border-radius: 999px; letter-spacing: 0.5px;">P&K</div>
                </div>
                <div style="padding: 20px; flex: 1; display: flex; flex-direction: column;">
                    <h3 style="font-size: 16px; font-weight: 800; color: #1a2744; margin: 0 0 8px 0; line-height: 1.3;">Tech Workshop: Web Development</h3>
                    <p style="font-size: 13px; color: #5a6a8a; line-height: 1.6; margin: 0 0 16px 0; flex: 1;">Pelatihan intensif pengembangan web menggunakan Laravel dan Vue.js untuk meningkatkan skill anggota.</p>
                    <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #eef2ff; padding-top: 14px; margin-top: auto;">
                        <span style="font-size: 12px; color: #7a8aaa; display: flex; align-items: center; gap: 5px;">
                            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            12 Agu 2026
                        </span>
                        <a href="#" style="font-size: 13px; font-weight: 700; color: #2563eb; text-decoration: none; display: flex; align-items: center; gap: 4px;">Detail <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg></a>
                    </div>
                </div>
            </div>

            {{-- Sample Card 2 --}}
            <div style="background: #fff; border: 1.5px solid #dbe8ff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 16px rgba(29,79,187,0.07); display: flex; flex-direction: column;">
                <div style="height: 160px; overflow: hidden; position: relative;">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=80" alt="Studi Banding" style="width: 100%; height: 100%; object-fit: cover;">
                    <div style="position: absolute; top: 12px; left: 12px; background: #7c3aed; color: #fff; font-size: 10px; font-weight: 700; text-transform: uppercase; padding: 4px 12px; border-radius: 999px; letter-spacing: 0.5px;">HUMAS</div>
                </div>
                <div style="padding: 20px; flex: 1; display: flex; flex-direction: column;">
                    <h3 style="font-size: 16px; font-weight: 800; color: #1a2744; margin: 0 0 8px 0; line-height: 1.3;">Studi Banding Eksternal</h3>
                    <p style="font-size: 13px; color: #5a6a8a; line-height: 1.6; margin: 0 0 16px 0; flex: 1;">Kunjungan ke organisasi kampus lain untuk bertukar pikiran dan memperluas relasi eksternal.</p>
                    <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #eef2ff; padding-top: 14px; margin-top: auto;">
                        <span style="font-size: 12px; color: #7a8aaa; display: flex; align-items: center; gap: 5px;">
                            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            25 Sep 2026
                        </span>
                        <a href="#" style="font-size: 13px; font-weight: 700; color: #2563eb; text-decoration: none; display: flex; align-items: center; gap: 4px;">Detail <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg></a>
                    </div>
                </div>
            </div>

            {{-- Sample Card 3 --}}
            <div style="background: #fff; border: 1.5px solid #dbe8ff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 16px rgba(29,79,187,0.07); display: flex; flex-direction: column;">
                <div style="height: 160px; overflow: hidden; position: relative;">
                    <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?auto=format&fit=crop&w=800&q=80" alt="Hackathon" style="width: 100%; height: 100%; object-fit: cover;">
                    <div style="position: absolute; top: 12px; left: 12px; background: #0d9488; color: #fff; font-size: 10px; font-weight: 700; text-transform: uppercase; padding: 4px 12px; border-radius: 999px; letter-spacing: 0.5px;">LITBANG</div>
                </div>
                <div style="padding: 20px; flex: 1; display: flex; flex-direction: column;">
                    <h3 style="font-size: 16px; font-weight: 800; color: #1a2744; margin: 0 0 8px 0; line-height: 1.3;">ITC Hackathon 2026</h3>
                    <p style="font-size: 13px; color: #5a6a8a; line-height: 1.6; margin: 0 0 16px 0; flex: 1;">Kompetisi pembuatan prototipe aplikasi dalam waktu 48 jam untuk menciptakan inovasi teknologi kampus.</p>
                    <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid #eef2ff; padding-top: 14px; margin-top: auto;">
                        <span style="font-size: 12px; color: #7a8aaa; display: flex; align-items: center; gap: 5px;">
                            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            10 Nov 2026
                        </span>
                        <a href="#" style="font-size: 13px; font-weight: 700; color: #2563eb; text-decoration: none; display: flex; align-items: center; gap: 4px;">Detail <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg></a>
                    </div>
                </div>
            </div>

        </div>
    </section>

</div>
@endsection
