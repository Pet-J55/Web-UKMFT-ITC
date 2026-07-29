<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DivisiController extends Controller
{
    /**
     * Get array of all division data.
     */
    public function getDivisiData()
    {
        return [
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
                'deskripsi' => 'Membangun dan memelihara hubungan relasi internal maupun eksternal dengan pihak kampus, alumni, serta berbagai mitra kerja sama.',
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
            ],
            [
                'nama' => 'P&K',
                'deskripsi' => 'Menyelenggarakan kegiatan pendidikan, pelatihan teknis IT, serta memfasilitasi pembuatan karya teknologi berkualitas bagi seluruh anggota.',
                'icon' => '📚',
                'ketua' => [
                    'nama' => 'DANI SETIAWAN',
                    'jabatan' => 'Ketua Divisi',
                    'foto' => 'profile-3.png'
                ],
                'anggota' => [
                    ['nama' => 'DANI', 'jabatan' => 'Kadiv', 'foto' => 'profile-3.png'],
                    ['nama' => 'ERNA', 'jabatan' => 'Sekdiv', 'foto' => 'profile-1.png'],
                    ['nama' => 'FARHAN', 'jabatan' => 'Anggota', 'foto' => 'profile-2.png'],
                    ['nama' => 'GILANG', 'jabatan' => 'Anggota', 'foto' => 'profile-3.png'],
                    ['nama' => 'HANI', 'jabatan' => 'Anggota', 'foto' => 'profile-1.png'],
                ]
            ],
            [
                'nama' => 'PSDM',
                'deskripsi' => 'Mengelola kaderisasi, mempererat keakraban antar anggota, serta mengoptimalkan potensi kepemimpinan dan soft skill seluruh pengurus.',
                'icon' => '🤝',
                'ketua' => [
                    'nama' => 'RIZKY PRATAMA',
                    'jabatan' => 'Ketua Divisi',
                    'foto' => 'profile-1.png'
                ],
                'anggota' => [
                    ['nama' => 'RIZKY', 'jabatan' => 'Kadiv', 'foto' => 'profile-1.png'],
                    ['nama' => 'INDRA', 'jabatan' => 'Sekdiv', 'foto' => 'profile-2.png'],
                    ['nama' => 'JOKO', 'jabatan' => 'Anggota', 'foto' => 'profile-3.png'],
                    ['nama' => 'KIKI', 'jabatan' => 'Anggota', 'foto' => 'profile-1.png'],
                    ['nama' => 'LESTARI', 'jabatan' => 'Anggota', 'foto' => 'profile-2.png'],
                ]
            ],
            [
                'nama' => 'INFOKOM',
                'deskripsi' => 'Bertanggung jawab atas publikasi media kreatif, desain visual, dokumentasi kegiatan, dan pengelolaan saluran informasi organisasi.',
                'icon' => '🎨',
                'ketua' => [
                    'nama' => 'MAYA ROSITA',
                    'jabatan' => 'Ketua Divisi',
                    'foto' => 'profile-2.png'
                ],
                'anggota' => [
                    ['nama' => 'MAYA', 'jabatan' => 'Kadiv', 'foto' => 'profile-2.png'],
                    ['nama' => 'NIDA', 'jabatan' => 'Sekdiv', 'foto' => 'profile-3.png'],
                    ['nama' => 'OSCAR', 'jabatan' => 'Anggota', 'foto' => 'profile-1.png'],
                    ['nama' => 'PUTRI', 'jabatan' => 'Anggota', 'foto' => 'profile-2.png'],
                    ['nama' => 'QORI', 'jabatan' => 'Anggota', 'foto' => 'profile-3.png'],
                ]
            ]
        ];
    }

    public function index()
    {
        $data_divisi = $this->getDivisiData();
        return view('divisi', compact('data_divisi'));
    }

    public function home()
    {
        $data_divisi = $this->getDivisiData();
        return view('pages.home', compact('data_divisi'));
    }
}
