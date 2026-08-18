<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

    /**
     * Get array of all program kerja data.
     */
    public function getProkerData()
    {
        return [
            [
                'slug'              => 'workshop-web-development',
                'divisi'            => 'LITBANG',
                'divisiColor'       => '#2563eb',
                'tahun'             => '2026',
                'judul'             => 'Workshop Web Development',
                'deskripsi'         => 'Belajar Pengembangan web mulai dari dasar hingga pro',
                'deskripsi_panjang' => 'Program kerja UKM FT ITC dirancang untuk mengembangkan potensi anggota mealalui kegiatan yang inovatif, kolaboratif, dan berdampak positif.',
                'tanggal'           => '16 Juni 2026',
                'hari'              => 'Sabtu',
                'lokasi'            => 'RKBF 204',
                'gedung'            => 'Gedung Fakultas Teknik',
                'peserta'           => 60,
                'kategori_peserta'  => 'Mahasiswa Aktif',
                'waktu'             => '08.00 - 15.00 WIB',
                'durasi'            => '1 Hari Kegiatan',
                'img'               => 'https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=800&q=80',
                // --- Optional detail fields ---
                'tentang'   => 'Workshop Web Development adalah program kerja litbang yang dirancang untuk emningkatkan kemampuan anggota dalam pengembangan web, mulai dari dasra hingga tahap pembuatan proyek nyata. Peserta akan mempelajari HTML, CSS, Java Script, hingga PHP dan Laravel melalui teori dan praktik langsung bersama mentor berpengalaman.',
                'kutipan'   => 'Belajar, Praktek, dan berinovasi untuk menjadi developer masa depan.',
                'materi'    => [
                    'Pengenalan HTML dan Struktur Dasar Web',
                    'CSS dan Desain Responsif',
                    'JavaScript Dasar untuk Interaktivitas',
                    'PHP dan Manajemen database',
                    'Membangun aplikasi dengan Laravel',
                    'Deploy Aplikasi ke Hosting',
                    'Best Practice dan Project Review',
                ],
                'benefit'   => [
                    ['icon' => '🏅', 'label' => 'Sertifikat',    'sub' => 'Workshop'],
                    ['icon' => '📖', 'label' => 'Modul',         'sub' => 'Pembelajaran'],
                    ['icon' => '💻', 'label' => 'Praktik',       'sub' => 'Langsung'],
                    ['icon' => '🍱', 'label' => 'Snack &',       'sub' => 'Lunch'],
                    ['icon' => '🤝', 'label' => 'Relasi &',      'sub' => 'Networking'],
                    ['icon' => '👨‍🏫', 'label' => 'Mentor',       'sub' => 'Berpengalaman'],
                ],
                'jadwal'    => [
                    ['waktu' => '08.00 – 08.30', 'kegiatan' => 'Registrasi & Pembukaan',       'keterangan' => 'Check-in peserta dan sambutan panitia'],
                    ['waktu' => '08.30 – 10.00', 'kegiatan' => 'Sesi 1 — HTML & CSS Dasar',    'keterangan' => 'Struktur halaman, styling, dan layout'],
                    ['waktu' => '10.00 – 10.15', 'kegiatan' => 'Coffee Break',                  'keterangan' => null],
                    ['waktu' => '10.15 – 12.00', 'kegiatan' => 'Sesi 2 — JavaScript Interaktif', 'keterangan' => 'DOM manipulation dan event handling'],
                    ['waktu' => '12.00 – 13.00', 'kegiatan' => 'ISHOMA',                        'keterangan' => null],
                    ['waktu' => '13.00 – 14.30', 'kegiatan' => 'Sesi 3 — PHP & Laravel',       'keterangan' => 'CRUD aplikasi sederhana dengan Laravel'],
                    ['waktu' => '14.30 – 15.00', 'kegiatan' => 'Project Demo & Penutupan',     'keterangan' => 'Presentasi karya peserta dan foto bersama'],
                ],
                'syarat'    => [
                    'Mahasiswa aktif Fakultas Teknik ITC',
                    'Membawa laptop dengan spesifikasi minimal RAM 4GB',
                    'Sudah menginstal VS Code dan XAMPP sebelum hari H',
                    'Mendaftar melalui link Google Form sebelum kuota penuh',
                    'Berpakaian rapi (tidak diperkenankan memakai sandal)',
                ],
                'dokumentasi' => [
                    // --- FOTO ---
                    ['type' => 'foto', 'img' => 'https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=900&q=80', 'caption' => 'Sesi pembukaan workshop'],
                    ['type' => 'foto', 'img' => 'https://images.unsplash.com/photo-1542831371-29b0f74f9713?auto=format&fit=crop&w=900&q=80', 'caption' => 'Peserta mengikuti sesi coding'],
                    ['type' => 'foto', 'img' => 'https://images.unsplash.com/photo-1515162816999-a0c47dc192f7?auto=format&fit=crop&w=900&q=80', 'caption' => 'Mentor memberikan penjelasan materi HTML'],
                    ['type' => 'foto', 'img' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=900&q=80', 'caption' => 'Sesi diskusi kelompok'],
                    ['type' => 'foto', 'img' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=900&q=80', 'caption' => 'Demo proyek akhir peserta'],
                    ['type' => 'foto', 'img' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=900&q=80', 'caption' => 'Foto bersama seluruh peserta'],
                    ['type' => 'foto', 'img' => 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=900&q=80', 'caption' => 'Sesi tanya jawab dengan mentor'],
                    ['type' => 'foto', 'img' => 'https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=900&q=80', 'caption' => 'Peserta aktif berdiskusi'],
                    ['type' => 'foto', 'img' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=900&q=80', 'caption' => 'Suasana coding session'],
                    ['type' => 'foto', 'img' => 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=900&q=80', 'caption' => 'Praktik langsung membuat web'],
                    ['type' => 'foto', 'img' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=900&q=80', 'caption' => 'Pengerjaan tugas individu'],
                    ['type' => 'foto', 'img' => 'https://images.unsplash.com/photo-1593642632559-0c6d3fc62b89?auto=format&fit=crop&w=900&q=80', 'caption' => 'Presentasi hasil project'],
                    ['type' => 'foto', 'img' => 'https://images.unsplash.com/photo-1484417894907-623942c8ee29?auto=format&fit=crop&w=900&q=80', 'caption' => 'Coffee break antar sesi'],
                    ['type' => 'foto', 'img' => 'https://images.unsplash.com/photo-1571171637578-41bc2dd41cd2?auto=format&fit=crop&w=900&q=80', 'caption' => 'Workshop Laravel framework'],
                    ['type' => 'foto', 'img' => 'https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=900&q=80', 'caption' => 'Sesi JavaScript dasar'],
                    ['type' => 'foto', 'img' => 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=900&q=80', 'caption' => 'Peserta mengerjakan latihan'],
                    ['type' => 'foto', 'img' => 'https://images.unsplash.com/photo-1515879218367-8466d910aaa4?auto=format&fit=crop&w=900&q=80', 'caption' => 'Review kode bersama mentor'],
                    ['type' => 'foto', 'img' => 'https://images.unsplash.com/photo-1550439062-609e1531270e?auto=format&fit=crop&w=900&q=80', 'caption' => 'Penyerahan sertifikat peserta'],
                    ['type' => 'foto', 'img' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=900&q=80', 'caption' => 'Kerja kelompok project akhir'],
                    ['type' => 'foto', 'img' => 'https://images.unsplash.com/photo-1507537297725-24a1c029d3ca?auto=format&fit=crop&w=900&q=80', 'caption' => 'Mentoring one-on-one session'],
                    ['type' => 'foto', 'img' => 'https://images.unsplash.com/photo-1556761175-4b46a572b786?auto=format&fit=crop&w=900&q=80', 'caption' => 'Sambutan ketua divisi Litbang'],
                    ['type' => 'foto', 'img' => 'https://images.unsplash.com/photo-1560472355-536de3962603?auto=format&fit=crop&w=900&q=80', 'caption' => 'Suasana makan siang bersama'],
                    ['type' => 'foto', 'img' => 'https://images.unsplash.com/photo-1531746790731-6c087fecd65a?auto=format&fit=crop&w=900&q=80', 'caption' => 'Diskusi topik deployment'],
                    ['type' => 'foto', 'img' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=900&q=80', 'caption' => 'Sesi penutupan dan dokumentasi'],
                    // --- VIDEO ---
                    ['type' => 'video', 'embed' => 'https://www.youtube.com/embed/UXBysRLWhEM', 'thumbnail' => 'https://img.youtube.com/vi/UXBysRLWhEM/maxresdefault.jpg', 'caption' => 'Highlight Workshop Web Development 2026', 'durasi' => '3:42'],
                    ['type' => 'video', 'embed' => 'https://www.youtube.com/embed/ysEN5RaKOlA', 'thumbnail' => 'https://img.youtube.com/vi/ysEN5RaKOlA/maxresdefault.jpg', 'caption' => 'Rekap Sesi HTML & CSS', 'durasi' => '5:10'],
                    ['type' => 'video', 'embed' => 'https://www.youtube.com/embed/hdI2bqOjy3c', 'thumbnail' => 'https://img.youtube.com/vi/hdI2bqOjy3c/maxresdefault.jpg', 'caption' => 'Demo Project Peserta — Laravel App', 'durasi' => '7:28'],
                    ['type' => 'video', 'embed' => 'https://www.youtube.com/embed/PkZNo7MFNFg', 'thumbnail' => 'https://img.youtube.com/vi/PkZNo7MFNFg/maxresdefault.jpg', 'caption' => 'Sesi Tanya Jawab dengan Mentor', 'durasi' => '12:05'],
                ],
            ],
            [
                'slug'              => 'pelatihan-ui-ux-design',
                'divisi'            => 'LITBANG',
                'divisiColor'       => '#2563eb',
                'tahun'             => '2026',
                'judul'             => 'Pelatihan UI/UX Design',
                'deskripsi'         => 'Meningkatkan kemampuan desain digital secara profesional',
                'deskripsi_panjang' => 'Pelatihan intensif yang dirancang untuk membekali peserta dengan kemampuan desain antarmuka dan pengalaman pengguna yang modern dan profesional.',
                'tanggal'           => '16 Jun 2026',
                'hari'              => 'Sabtu',
                'lokasi'            => 'RKBF 2004',
                'gedung'            => 'Gedung Fakultas Teknik',
                'peserta'           => 60,
                'kategori_peserta'  => 'Mahasiswa Aktif',
                'waktu'             => '08.00 - 16.00 WIB',
                'durasi'            => '1 Hari Kegiatan',
                'img'               => 'https://images.unsplash.com/photo-1542831371-29b0f74f9713?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'slug'              => 'mini-study-club',
                'divisi'            => 'PK',
                'divisiColor'       => '#0891b2',
                'tahun'             => '2026',
                'judul'             => 'Mini Study Club',
                'deskripsi'         => 'Belajar bersama dalam kelompok kecil dengan topik-topik menarik',
                'deskripsi_panjang' => 'Kegiatan belajar bersama dalam kelompok kecil yang membahas topik-topik teknologi terkini dengan suasana yang santai dan kolaboratif.',
                'tanggal'           => '16 Jun 2026',
                'hari'              => 'Sabtu',
                'lokasi'            => 'RKBF 2004',
                'gedung'            => 'Gedung Fakultas Teknik',
                'peserta'           => 60,
                'kategori_peserta'  => 'Mahasiswa Aktif',
                'waktu'             => '13.00 - 17.00 WIB',
                'durasi'            => '1 Hari Kegiatan',
                'img'               => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'slug'              => 'family-time',
                'divisi'            => 'PSDM',
                'divisiColor'       => '#7c3aed',
                'tahun'             => '2026',
                'judul'             => 'Family Time',
                'deskripsi'         => 'Mempererat keakraban antar anggota melalui kegiatan seru bersama',
                'deskripsi_panjang' => 'Kegiatan mempererat keakraban antar anggota melalui berbagai permainan, diskusi ringan, dan kebersamaan yang menyenangkan.',
                'tanggal'           => '20 Jul 2026',
                'hari'              => 'Minggu',
                'lokasi'            => 'RKBF 2004',
                'gedung'            => 'Gedung Fakultas Teknik',
                'peserta'           => 80,
                'kategori_peserta'  => 'Semua Anggota',
                'waktu'             => '09.00 - 17.00 WIB',
                'durasi'            => '1 Hari Kegiatan',
                'img'               => 'https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'slug'              => 'foto-pengurus',
                'divisi'            => 'INFOKOM',
                'divisiColor'       => '#d97706',
                'tahun'             => '2026',
                'judul'             => 'Foto Pengurus',
                'deskripsi'         => 'Sesi foto resmi pengurus untuk keperluan publikasi dan dokumentasi',
                'deskripsi_panjang' => 'Sesi foto resmi pengurus UKM FT ITC yang digunakan untuk keperluan publikasi media sosial, website, dan dokumentasi kepengurusan.',
                'tanggal'           => '5 Agu 2026',
                'hari'              => 'Rabu',
                'lokasi'            => 'RKBF 2004',
                'gedung'            => 'Gedung Fakultas Teknik',
                'peserta'           => 50,
                'kategori_peserta'  => 'Pengurus ITC',
                'waktu'             => '10.00 - 13.00 WIB',
                'durasi'            => 'Setengah Hari',
                'img'               => 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'slug'              => 'studi-banding-eksternal',
                'divisi'            => 'HUMAS',
                'divisiColor'       => '#16a34a',
                'tahun'             => '2025',
                'judul'             => 'Studi Banding Eksternal',
                'deskripsi'         => 'Kunjungan ke organisasi kampus lain untuk bertukar pikiran',
                'deskripsi_panjang' => 'Kunjungan ke organisasi kemahasiswaan kampus lain untuk berbagi pengalaman, bertukar ide, dan menjalin relasi yang saling menguntungkan.',
                'tanggal'           => '25 Sep 2025',
                'hari'              => 'Kamis',
                'lokasi'            => 'RKBF 2004',
                'gedung'            => 'Gedung Fakultas Teknik',
                'peserta'           => 40,
                'kategori_peserta'  => 'Pengurus ITC',
                'waktu'             => '08.00 - 17.00 WIB',
                'durasi'            => '1 Hari Kegiatan',
                'img'               => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'slug'              => 'sosialisasi-ukm',
                'divisi'            => 'HUMAS',
                'divisiColor'       => '#16a34a',
                'tahun'             => '2025',
                'judul'             => 'Sosialisasi UKM',
                'deskripsi'         => 'Memperkenalkan UKM FT ITC kepada mahasiswa baru',
                'deskripsi_panjang' => 'Kegiatan sosialisasi yang memperkenalkan UKM FT ITC, visi misi, program kerja, dan cara bergabung kepada seluruh mahasiswa baru Fakultas Teknik.',
                'tanggal'           => '10 Okt 2025',
                'hari'              => 'Jumat',
                'lokasi'            => 'RKBF 2004',
                'gedung'            => 'Gedung Fakultas Teknik',
                'peserta'           => 120,
                'kategori_peserta'  => 'Mahasiswa Baru',
                'waktu'             => '09.00 - 12.00 WIB',
                'durasi'            => '1 Hari Kegiatan',
                'img'               => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=800&q=80',
            ],
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

    public function anggota()
    {
        $data_divisi = $this->getDivisiData();
        return view('pages.anggota', compact('data_divisi'));
    }

    public function proker()
    {
        return view('pages.proker');
    }

    public function viewProker()
    {
        return view('pages.view-proker');
    }

    public function detailProker(string $slug)
    {
        $prokerList = $this->getProkerData();
        $proker = collect($prokerList)->firstWhere('slug', $slug);

        if (!$proker) {
            abort(404);
        }

        return view('pages.detail-proker', compact('proker'));
    }

    public function viewDokumentasi()
    {
        return view('pages.view-dokumentasi');
    }

    public function penugasan()
    {
        return view('pages.penugasan');
    }

    public function detailDokumentasi(string $slug)
    {
        $prokerList = $this->getProkerData();
        $proker = collect($prokerList)->firstWhere('slug', $slug);

        if (!$proker || empty($proker['dokumentasi'])) {
            abort(404);
        }

        $fotos  = collect($proker['dokumentasi'])->where('type', 'foto')->values()->all();
        $videos = collect($proker['dokumentasi'])->where('type', 'video')->values()->all();
        $semua  = $proker['dokumentasi'];

        return view('pages.detail-dokumentasi', compact('proker', 'fotos', 'videos', 'semua'));
    }
}
