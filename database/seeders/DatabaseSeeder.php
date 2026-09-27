<?php

namespace Database\Seeders;

use App\Models\Divisi;
use App\Models\Anggota;
use App\Models\Proker;
use App\Models\Penugasan;
use App\Models\Dokumentasi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // =========================
        // DATA DIVISI
        // =========================

        $bph = Divisi::create([
            'nama_divisi' => 'BPH',
        ]);
        Anggota::create([
            'nama' => 'R. Rifqi Nova Khairifo',
            'jabatan' => 'Ketua Umum',
            'foto' => 'anggota/rifo.webp',
            'divisi_id' => $bph->id,
        ]);
        Anggota::create([
            'nama' => 'Mohammad Yoga Saputra',
            'jabatan' => 'Wakil Ketua Umum',
            'foto' => 'anggota/yoga.webp',
            'divisi_id' => $bph->id,
        ]);
        Anggota::create([
            'nama' => 'Rifqi Fairurrafi',
            'jabatan' => 'Sekretaris Jendral',
            'foto' => 'anggota/rafi.webp',
            'divisi_id' => $bph->id,
        ]);
        Anggota::create([
            'nama' => "Triswanti Jannatul Ma'wa",
            'jabatan' => 'Sekretaris 1',
            'foto' => "anggota/ma'wa.webp",
            'divisi_id' => $bph->id,
        ]);
        Anggota::create([
            'nama' => "Mar'atus Solecha Citra N. H.",
            'jabatan' => 'Bendahara Umum',
            'foto' => 'anggota/citra.webp',
            'divisi_id' => $bph->id,
        ]);
        Anggota::create([
            'nama' => 'Yesica Pitri Ariani',
            'jabatan' => 'Bendahara 1',
            'foto' => 'anggota/yesica.webp',
            'divisi_id' => $bph->id,
        ]);

        $infokom = Divisi::create([
            'nama_divisi' => 'Infokom',
        ]);
        Anggota::create([
            'nama' => 'Evrilla Steviano T.',
            'jabatan' => 'Kepala Divisi',
            'foto' => 'anggota/vrilla.webp',
            'divisi_id' => $infokom->id,
        ]);
        Anggota::create([
            'nama' => 'Muhammad Fiki Arya K.',
            'jabatan' => 'Sekretaris Divisi',
            'foto' => 'anggota/arya.webp',
            'divisi_id' => $infokom->id,
        ]);
        Anggota::create([
            'nama' => 'Mohamad Alfin Mubarok',
            'jabatan' => 'Staff',
            'foto' => 'anggota/alfin.webp',
            'divisi_id' => $infokom->id,
        ]);
        Anggota::create([
            'nama' => 'Siska Roudhotul Jannah',
            'jabatan' => 'Staff',
            'foto' => 'anggota/siska.webp',
            'divisi_id' => $infokom->id,
        ]);
        Anggota::create([
            'nama' => 'Elsa Wulan Ramadhani',
            'jabatan' => 'Staff',
            'foto' => 'anggota/elsa.webp',
            'divisi_id' => $infokom->id,
        ]);
        Proker::create([
            'foto' => 'ig',
            'nama' => 'Instagram',
            'deskripsi' => 'Pengelolaan dan publikasi konten melalui Instagram sebagai media informasi, dokumentasi, dan komunikasi UKMFT-ITC kepada anggota maupun masyarakat.',
            'lokasi' => '-',
            'peserta' => 0,
            'tanggal_berlangsung' => '2026-02-15',
            'divisi_id' => $infokom->id,
        ]);
        Proker::create([
            'foto' => 'ulangtahun',
            'nama' => 'Ucapan Ulang Tahun',
            'deskripsi' => 'Publikasi ucapan ulang tahun bagi pengurus UKMFT-ITC melalui media sosial sebagai bentuk apresiasi dan perhatian terhadap anggota organisasi.',
            'lokasi' => '-',
            'peserta' => 0,
            'tanggal_berlangsung' => '2026-02-15',
            'divisi_id' => $infokom->id,
        ]);
        Proker::create([
            'foto' => 'tiktok',
            'nama' => 'Youtube & Tiktok',
            'deskripsi' => 'Pengelolaan konten video pada platform YouTube dan TikTok untuk mendokumentasikan kegiatan serta meningkatkan publikasi dan eksistensi UKMFT-ITC di media digital.',
            'lokasi' => '-',
            'peserta' => 0,
            'tanggal_berlangsung' => '2026-02-15',
            'divisi_id' => $infokom->id,
        ]);
        Proker::create([
            'foto' => 'fotopengurus',
            'nama' => 'Foto Pengurus',
            'deskripsi' => 'Kegiatan dokumentasi foto resmi pengurus UKMFT-ITC yang digunakan untuk kebutuhan publikasi, website, media sosial, dan dokumentasi organisasi.',
            'lokasi' => 'Gedung Pertemuan',
            'peserta' => 33,
            'tanggal_berlangsung' => '2026-04-09',
            'divisi_id' => $infokom->id,
        ]);
        Proker::create([
            'foto' => 'pdh',
            'nama' => 'PDH Pengurus',
            'deskripsi' => 'Pengadaan pakaian dinas harian sebagai identitas resmi pengurus UKMFT-ITC dalam menjalankan kegiatan organisasi.',
            'lokasi' => '-',
            'peserta' => 0,
            'tanggal_berlangsung' => '2026-03-01',
            'divisi_id' => $infokom->id,
        ]);
        Proker::create([
            'foto' => 'struktural',
            'nama' => 'Struktural Pengurus',
            'deskripsi' => 'Pembuatan dan publikasi struktur kepengurusan UKMFT-ITC sebagai informasi mengenai susunan organisasi dan pembagian tanggung jawab setiap pengurus.',
            'lokasi' => 'Gedung Inovasi',
            'peserta' => 33,
            'tanggal_berlangsung' => '2026-06-01',
            'divisi_id' => $infokom->id,
        ]);
        Proker::create([
            'foto' => 'ourprogramrecap',
            'nama' => 'Our Program Recap',
            'deskripsi' => 'Dokumentasi dan publikasi rangkuman setiap program kerja yang telah selesai dilaksanakan sebagai arsip sekaligus media informasi kegiatan UKMFT-ITC.',
            'lokasi' => '-',
            'peserta' => 0,
            'tanggal_berlangsung' => '2026-02-22',
            'divisi_id' => $infokom->id,
        ]);
        
        
        $psdm = Divisi::create([
            'nama_divisi' => 'PSDM',
        ]);
        Anggota::create([
            'nama' => 'Vigil Andhika',
            'jabatan' => 'Kepala Divisi',
            'foto' => 'anggota/vigil.webp',
            'divisi_id' => $psdm->id,
        ]);
        Anggota::create([
            'nama' => 'Rofikotul K.',
            'jabatan' => 'Sekretaris Divisi',
            'foto' => 'anggota/fiko.webp',
            'divisi_id' => $psdm->id,
        ]);
        Anggota::create([
            'nama' => 'Maha',
            'jabatan' => 'Staff',
            'foto' => 'anggota/maha.webp',
            'divisi_id' => $psdm->id,
        ]);
        Anggota::create([
            'nama' => 'Visca Abella',
            'jabatan' => 'Staff',
            'foto' => 'anggota/visca.webp',
            'divisi_id' => $psdm->id,
        ]);
        Proker::create([
            'foto' => 'makrab',
            'nama' => 'Makrab Pengurus',
            'deskripsi' => 'Kegiatan malam keakraban yang bertujuan mempererat hubungan, membangun kebersamaan, dan meningkatkan rasa kekeluargaan antar anggota UKMFT-ITC.',
            'lokasi' => 'Villa Tirta Alir Pacet',
            'peserta' => 33,
            'tanggal_berlangsung' => '2026-04-03',
            'divisi_id' => $psdm->id,
        ]);
        Proker::create([
            'foto' => 'infinite',
            'nama' => 'Infinite',
            'deskripsi' => 'Program kerja yang menjadi salah satu kegiatan utama PSDM dalam membangun kebersamaan, pengembangan anggota, dan memperkuat hubungan antar pengurus dan anggota.',
            'lokasi' => '-',
            'peserta' => 0,
            'tanggal_berlangsung' => '2026-10-23',
            'divisi_id' => $psdm->id,
        ]);
        Proker::create([
            'foto' => 'belumada',
            'nama' => 'Diesnatalis',
            'deskripsi' => 'Kegiatan dalam rangka memperingati hari ulang tahun organisasi sekaligus menjadi sarana untuk mempererat kebersamaan seluruh anggota UKMFT-ITC.',
            'lokasi' => '-',
            'peserta' => 0,
            'tanggal_berlangsung' => '2026-10-31',
            'divisi_id' => $psdm->id,
        ]);
        Proker::create([
            'foto' => 'belumada',
            'nama' => 'Kongres',
            'deskripsi' => 'Kegiatan musyawarah organisasi yang membahas berbagai hal terkait keberlangsungan organisasi, evaluasi kepengurusan, serta agenda organisasi berikutnya.',
            'lokasi' => '-',
            'peserta' => 0,
            'tanggal_berlangsung' => '2026-12-12',
            'divisi_id' => $psdm->id,
        ]);
        Proker::create([
            'foto' => 'bukber',
            'nama' => 'Bukber',
            'deskripsi' => 'Kegiatan buka bersama sebagai sarana mempererat silaturahmi dan kebersamaan antar anggota UKMFT-ITC.',
            'lokasi' => 'Gedung RKBF 203',
            'peserta' => 50,
            'tanggal_berlangsung' => '2026-03-08',
            'divisi_id' => $psdm->id,
        ]);
        Proker::create([
            'foto' => 'badminton',
            'nama' => 'Family Time - Badminton',
            'deskripsi' => 'Kegiatan olahraga bersama untuk menjaga kebugaran sekaligus meningkatkan keakraban dan kebersamaan antar anggota.',
            'lokasi' => 'Lapangan GOR NUSANTARA',
            'peserta' => 30,
            'tanggal_berlangsung' => '2026-04-26',
            'divisi_id' => $psdm->id,
        ]);
        Proker::create([
            'foto' => 'rujakan',
            'nama' => 'Family Time - Rujakan',
            'deskripsi' => 'Kegiatan santai bersama anggota yang bertujuan menciptakan suasana kebersamaan dan mempererat hubungan antar anggota.',
            'lokasi' => 'Taman Kampus',
            'peserta' => 30,
            'tanggal_berlangsung' => '2026-05-20',
            'divisi_id' => $psdm->id,
        ]);
        Proker::create([
            'foto' => 'bakar',
            'nama' => 'Family Time - Bakar-bakar',
            'deskripsi' => 'Kegiatan kebersamaan melalui acara makan bersama untuk menciptakan suasana yang santai dan mempererat hubungan antar anggota.',
            'lokasi' => 'Kost Vigil',
            'peserta' => 35,
            'tanggal_berlangsung' => '2026-06-13',
            'divisi_id' => $psdm->id,
        ]);
        Proker::create([
            'foto' => 'independenceday',
            'nama' => 'Independence Day',
            'deskripsi' => 'Kegiatan untuk memperingati dan memeriahkan Hari Kemerdekaan Republik Indonesia melalui kegiatan kebersamaan antar anggota.',
            'lokasi' => 'Lapangan Belakang Gedung RKBF',
            'peserta' => 30,
            'tanggal_berlangsung' => '2026-08-22',
            'divisi_id' => $psdm->id,
        ]);
        Proker::create([
            'foto' => 'belumada',
            'nama' => 'Family Time - Renang',
            'deskripsi' => 'Kegiatan olahraga bersama untuk menjaga kebugaran anggota sekaligus menjadi sarana rekreasi dan mempererat kebersamaan.',
            'lokasi' => '-',
            'peserta' => 0,
            'tanggal_berlangsung' => '2026-09-12',
            'divisi_id' => $psdm->id,
        ]);
            
        $PnK = Divisi::create([
            'nama_divisi' => 'P&K',
        ]);
        Anggota::create([
            'nama' => 'Moh. Ilyas Ramadhani',
            'jabatan' => 'Kepala Divisi',
            'foto' => 'anggota/ilyas.webp',
            'divisi_id' => $PnK->id,
        ]);
        Anggota::create([
            'nama' => 'Ach. Qusyairi Zainul M.',
            'jabatan' => 'Staff',
            'foto' => 'anggota/zen.webp',
            'divisi_id' => $PnK->id,
        ]);
        Anggota::create([
            'nama' => 'Nabila Putri',
            'jabatan' => 'Staff',
            'foto' => 'anggota/nabila.webp',
            'divisi_id' => $PnK->id,
        ]);
        Anggota::create([
            'nama' => 'Raihan Hadi F.',
            'jabatan' => 'Staff',
            'foto' => 'anggota/rehan.webp',
            'divisi_id' => $PnK->id,
        ]);
        Anggota::create([
            'nama' => 'Novi Amelia',
            'jabatan' => 'Staff',
            'foto' => 'anggota/amel.webp',
            'divisi_id' => $PnK->id,
        ]);
        Anggota::create([
            'nama' => 'Sirril Aisyiah',
            'jabatan' => 'Staff',
            'foto' => 'anggota/Sirril.webp',
            'divisi_id' => $PnK->id,
        ]);
        Proker::create([
            'foto' => 'technotainment',
            'nama' => 'Technotainment',
            'deskripsi' => 'Program kerja yang menjadi wadah bagi anggota untuk mengembangkan kreativitas, kemampuan teknologi, serta berkolaborasi dalam sebuah kegiatan yang inovatif.',
            'lokasi' => 'Online',
            'peserta' => 50,
            'tanggal_berlangsung' => '2026-05-14',
            'divisi_id' => $PnK->id,
        ]);
        Proker::create([
            'foto' => 'studyclub',
            'nama' => 'Study Club',
            'deskripsi' => 'Program kerja berupa kegiatan belajar bersama yang bertujuan meningkatkan pengetahuan dan kemampuan anggota melalui pembelajaran secara kolaboratif.',
            'lokasi' => '-',
            'peserta' => 0,
            'tanggal_berlangsung' => '2026-11-01',
            'divisi_id' => $PnK->id,
        ]);
        Proker::create([
            'foto' => 'itcp-timemanagement',
            'nama' => 'ITCP - Time Management',
            'deskripsi' => 'Kegiatan pengembangan kemampuan anggota dalam mengatur waktu secara efektif agar mampu menjalankan aktivitas akademik maupun organisasi dengan lebih terarah.',
            'lokasi' => 'Cafe Arban',
            'peserta' => 30,
            'tanggal_berlangsung' => '2026-04-25',
            'divisi_id' => $PnK->id,
        ]);
        Proker::create([
            'foto' => 'itcp-designgrafis',
            'nama' => 'ITCP - Design Grafis',
            'deskripsi' => 'Kegiatan pembelajaran dan pengembangan kemampuan desain grafis bagi anggota sebagai bekal dalam menghasilkan karya visual yang kreatif dan komunikatif.',
            'lokasi' => 'Gedung RKBF 204',
            'peserta' => 30,
            'tanggal_berlangsung' => '2026-05-22',
            'divisi_id' => $PnK->id,
        ]);
        Proker::create([
            'foto' => 'itcp-publicspeaking',
            'nama' => 'ITCP - Public Speaking',
            'deskripsi' => 'Kegiatan untuk meningkatkan kemampuan anggota dalam berbicara di depan umum, menyampaikan gagasan, dan berkomunikasi secara percaya diri.',
            'lokasi' => 'Gedung RKBF 204',
            'peserta' => 30,
            'tanggal_berlangsung' => '2026-06-12',
            'divisi_id' => $PnK->id,
        ]);
        Proker::create([
            'foto' => 'itcp-github',
            'nama' => 'ITCP - Github',
            'deskripsi' => 'Kegiatan pembelajaran mengenai penggunaan GitHub sebagai media untuk mengelola kode, berkolaborasi dalam pengembangan perangkat lunak, dan mengelola proyek secara bersama-sama.',
            'lokasi' => 'Gedung RKBF 201',
            'peserta' => 30,
            'tanggal_berlangsung' => '2026-08-11',
            'divisi_id' => $PnK->id,
        ]);
        Proker::create([
            'foto' => 'ismart',
            'nama' => 'ISMART - Peluang Karir di Era AI',
            'deskripsi' => 'Kegiatan yang membahas peluang dan perkembangan karier di tengah perkembangan teknologi kecerdasan buatan serta kompetensi yang perlu dipersiapkan oleh mahasiswa.',
            'lokasi' => 'Gedung Rektorat lt. 10',
            'peserta' => 50,
            'tanggal_berlangsung' => '2026-06-20',
            'divisi_id' => $PnK->id,
        ]);

        $humas = Divisi::create([
            'nama_divisi' => 'Humas',
        ]);
        Anggota::create([
            'nama' => 'Aisya',
            'jabatan' => 'Kepala Divisi',
            'foto' => 'anggota/aisya.webp',
            'divisi_id' => $humas->id,
        ]);
        Anggota::create([
            'nama' => 'Farrell Danendra Rafif B.',
            'jabatan' => 'Sekretaris Divisi',
            'foto' => 'anggota/farrell.webp',
            'divisi_id' => $humas->id,
        ]);
        Anggota::create([
            'nama' => 'Nandita Rayyan Arsy A.',
            'jabatan' => 'Staff',
            'foto' => 'anggota/dita.webp',
            'divisi_id' => $humas->id,
        ]);
        Anggota::create([
            'nama' => 'Monica Putri Avantika',
            'jabatan' => 'Staff',
            'foto' => 'anggota/monica.webp',
            'divisi_id' => $humas->id,
        ]);
        Proker::create([
            'foto' => 'itcrespect',
            'nama' => 'ITC RESPECT',
            'deskripsi' => 'Kegiatan yang bertujuan untuk mempererat hubungan dan membangun rasa saling menghargai antar anggota UKMFT-ITC.',
            'lokasi' => 'Telang & sekitarnya',
            'peserta' => 30,
            'tanggal_berlangsung' => '2026-03-10',
            'divisi_id' => $humas->id,
        ]);
        Proker::create([
            'foto' => 'sponsortechno',
            'nama' => 'Sponsor Technotainment',
            'deskripsi' => 'Kegiatan sponsorship untuk mendukung pelaksanaan acara Technotainment sekaligus menjalin kerja sama dengan pihak eksternal.',
            'lokasi' => '-',
            'peserta' => 0,
            'tanggal_berlangsung' => '2026-04-21',
            'divisi_id' => $humas->id,
        ]);
        Proker::create([
            'foto' => 'belumada',
            'nama' => 'Sponsor Study Club',
            'deskripsi' => 'Kegiatan mencari dan menjalin kerja sama sponsorship untuk mendukung pelaksanaan program Study Club.',
            'lokasi' => '-',
            'peserta' => 0,
            'tanggal_berlangsung' => '2026-10-20',
            'divisi_id' => $humas->id,
        ]);
        Proker::create([
            'foto' => 'belumada',
            'nama' => 'Studi Banding',
            'deskripsi' => 'Kegiatan kunjungan dan pertukaran wawasan dengan organisasi lain untuk memperoleh pengalaman, pengetahuan, serta membangun relasi kelembagaan.',
            'lokasi' => '-',
            'peserta' => 0,
            'tanggal_berlangsung' => null,
            'divisi_id' => $humas->id,
        ]);

        $litbang = Divisi::create([
            'nama_divisi' => 'Litbang',
        ]);
        Anggota::create([
            'nama' => 'Safri Iwanussuyuf',
            'jabatan' => 'Kepala Divisi',
            'foto' => 'anggota/safri.webp',
            'divisi_id' => $litbang->id,
        ]);
        Anggota::create([
            'nama' => 'Garindra Yusuf Widhiarsa',
            'jabatan' => 'Sekretaris Divisi',
            'foto' => 'anggota/garin.webp',
            'divisi_id' => $litbang->id,
        ]);
        Anggota::create([
            'nama' => 'Abd Salam Ali',
            'jabatan' => 'Staff',
            'foto' => 'anggota/salam.webp',
            'divisi_id' => $litbang->id,
        ]);
        Anggota::create([
            'nama' => 'Fima Ayu Lestari',
            'jabatan' => 'Staff',
            'foto' => 'anggota/fima.webp',
            'divisi_id' => $litbang->id,
        ]);
        Anggota::create([
            'nama' => 'Fabian Fakhru Thirafi',
            'jabatan' => 'Staff',
            'foto' => 'anggota/fabian.webp',
            'divisi_id' => $litbang->id,
        ]);
        Proker::create([
            'foto' => 'infolomba',
            'nama' => 'Fasilitator Lomba',
            'deskripsi' => 'Kegiatan pendampingan dan fasilitasi dalam pelaksanaan lomba untuk membantu peserta mempersiapkan dan mengembangkan kemampuan yang dibutuhkan selama kompetisi.',
            'lokasi' => '-',
            'peserta' => 0,
            'tanggal_berlangsung' => '2026-02-17',
            'divisi_id' => $litbang->id,
        ]);
        Proker::create([
            'foto' => 'webtechno',
            'nama' => 'Pengembangan Website Technotainment 2026',
            'deskripsi' => 'Kegiatan pengembangan website Technotainment 2026 sebagai media informasi dan pendukung pelaksanaan kegiatan dengan menerapkan kemampuan di bidang teknologi dan pengembangan web.',
            'lokasi' => 'Lab Sister',
            'peserta' => 0,
            'tanggal_berlangsung' => '2026-04-19',
            'divisi_id' => $litbang->id,
        ]);
        Proker::create([
            'foto' => 'webitc',
            'nama' => 'Pengembangan Website ITC',
            'deskripsi' => 'Kegiatan pengembangan dan pemeliharaan website UKMFT-ITC sebagai media informasi organisasi serta sarana untuk mendukung kebutuhan digital dan publikasi kegiatan.',
            'lokasi' => 'Lab Riset',
            'peserta' => 0,
            'tanggal_berlangsung' => '2026-06-28',
            'divisi_id' => $litbang->id,
        ]);
        Proker::create([
            'foto' => 'belumada',
            'nama' => 'Fasilitator Study Club',
            'deskripsi' => 'Kegiatan pendampingan dan fasilitasi Study Club untuk membantu peserta dalam proses belajar, berbagi pengetahuan, serta mengembangkan kemampuan di bidang yang dipelajari.',
            'lokasi' => '-',
            'peserta' => 0,
            'tanggal_berlangsung' => '2026-11-01',
            'divisi_id' => $litbang->id,
        ]);



        Dokumentasi::create([
            'proker_id' => 8,
            'type' => 'foto',
            'file' => 'makrab-1.webp',
            'embed' => null,
            'thumbnail' => null,
            'caption' => 'Malam Keakraban Pengurus UKM-FT ITC',
            'durasi' => null,
        ]);
        Dokumentasi::create([
            'proker_id' => 8,
            'type' => 'foto',
            'file' => 'makrab-2.webp',
            'embed' => null,
            'thumbnail' => null,
            'caption' => 'Malam Keakraban Pengurus UKM-FT ITC',
            'durasi' => null,
        ]);
        Dokumentasi::create([
            'proker_id' => 8,
            'type' => 'foto',
            'file' => 'makrab-3.webp',
            'embed' => null,
            'thumbnail' => null,
            'caption' => 'Malam Keakraban Pengurus UKM-FT ITC',
            'durasi' => null,
        ]);
        Dokumentasi::create([
            'proker_id' => 8,
            'type' => 'foto',
            'file' => 'makrab-4.webp',
            'embed' => null,
            'thumbnail' => null,
            'caption' => 'Malam Keakraban Pengurus UKM-FT ITC',
            'durasi' => null,
        ]);
        Dokumentasi::create([
            'proker_id' => 8,
            'type' => 'video',
            'file' => null,
            'embed' => 'https://www.youtube.com/embed/SudropfvAcY',
            'thumbnail' => 'https://img.youtube.com/vi/SudropfvAcY/maxresdefault.jpg',
            'caption' => 'Malam Keakraban Pengurus UKMFT ITC',
            'durasi' => null,
        ]);

        Dokumentasi::create([
            'proker_id' => 24,
            'type' => 'foto',
            'file' => 'ismart-1.webp',
            'embed' => null,
            'thumbnail' => null,
            'caption' => 'Seminar ISMART',
            'durasi' => null,
        ]);
        Dokumentasi::create([
            'proker_id' => 24,
            'type' => 'foto',
            'file' => 'ismart-2.webp',
            'embed' => null,
            'thumbnail' => null,
            'caption' => 'Seminar ISMART',
            'durasi' => null,
        ]);
        Dokumentasi::create([
            'proker_id' => 24,
            'type' => 'foto',
            'file' => 'ismart-3.webp',
            'embed' => null,
            'thumbnail' => null,
            'caption' => 'Seminar ISMART',
            'durasi' => null,
        ]);
        Dokumentasi::create([
            'proker_id' => 24,
            'type' => 'foto',
            'file' => 'ismart-4.webp',
            'embed' => null,
            'thumbnail' => null,
            'caption' => 'Seminar ISMART',
            'durasi' => null,
        ]);

        Dokumentasi::create([
            'proker_id' => 18,
            'type' => 'foto',
            'file' => 'technotainment-1.webp',
            'embed' => null,
            'thumbnail' => null,
            'caption' => 'Kompetisi Technotainment',
            'durasi' => null,
        ]);
        Dokumentasi::create([
            'proker_id' => 18,
            'type' => 'foto',
            'file' => 'technotainment-2.webp',
            'embed' => null,
            'thumbnail' => null,
            'caption' => 'Kompetisi Technotainment',
            'durasi' => null,
        ]);
        Dokumentasi::create([
            'proker_id' => 18,
            'type' => 'foto',
            'file' => 'technotainment-3.webp',
            'embed' => null,
            'thumbnail' => null,
            'caption' => 'Kompetisi Technotainment',
            'durasi' => null,
        ]);
        Dokumentasi::create([
            'proker_id' => 18,
            'type' => 'foto',
            'file' => 'technotainment-4.webp',
            'embed' => null,
            'thumbnail' => null,
            'caption' => 'Kompetisi Technotainment',
            'durasi' => null,
        ]);
    }
}