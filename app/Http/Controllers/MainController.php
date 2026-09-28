<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Proker;
use App\Models\Penugasan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MainController extends Controller
{
    public function getDivisiData()
    {
        $divisi = Divisi::with('anggota')->get();
        return $divisi->map(function ($data_divisi) {
            // Cari pimpinan divisi
            $ketua = $data_divisi->anggota->first(function ($anggota) {
                return in_array($anggota->jabatan, [
                    'Kepala Divisi',
                    'Ketua Umum',
                ]);
            });
            // Ambil anggota selain pimpinan
            $anggota = $data_divisi->anggota
                ->filter(function ($data_anggota) use ($ketua) {
                    return !$ketua || $data_anggota->id !== $ketua->id;
                })
                ->map(function ($data_anggota) {
                    return [
                        'nama' => $data_anggota->nama,
                        'jabatan' => $data_anggota->jabatan,
                        'foto' => $data_anggota->foto,
                    ];
                })
                ->values()
                ->toArray();
            return [
                'nama' => strtoupper($data_divisi->nama_divisi),
                'deskripsi' => '',
                'icon' => '',
                'ketua' => $ketua ? [
                    'nama' => $ketua->nama,
                    'jabatan' => $ketua->jabatan,
                    'foto' => $ketua->foto,
                ] : null,
                'anggota' => $anggota,
            ];
        })->toArray();
    }
    
    public function getProkerData(){
        return Proker::with('divisi')->get()->groupBy(function ($data_proker) {
            return $data_proker->divisi->nama_divisi;
        });
    }

    public function home()
    {
        $data_divisi = $this->getDivisiData();
        $proker_data = $this->getProkerData();

        $totalPenugasan = Penugasan::count();

        $totalKategori = Penugasan::distinct('kategori')->count('kategori');

        return view('pages.home', compact(
            'data_divisi',
            'proker_data',
            'totalPenugasan',
            'totalKategori'
        ));
    }

    public function divisi()
    {
        $data_divisi = $this->getDivisiData();
        return view('pages.divisi', compact('data_divisi'));
    }

    public function anggota()
    {
        $data_divisi = $this->getDivisiData();
        return view('pages.anggota', compact('data_divisi'));
    }

    public function proker()
    {
        $proker_data = $this->getProkerData();
        return view('pages.proker', compact(
            'proker_data',
        ));
    }

    public function viewProker()
    {
        $proker = Proker::with('divisi')->get();

        $jumlahDivisi = $proker
            ->pluck('divisi_id')
            ->unique()
            ->count();

        $jumlahProker = $proker->count();

        $jumlahKegiatan = $proker
            ->whereNotNull('tanggal_berlangsung')
            ->count();

        $totalPeserta = $proker->sum('peserta');

        $jumlahDokumentasi = $proker
            ->filter(function ($item) {
                return !empty($item->foto) && $item->foto !== 'belumada';
            })
            ->count();

        return view('pages.view-proker', compact(
            'proker',
            'jumlahDivisi',
            'jumlahProker',
            'jumlahKegiatan',
            'totalPeserta',
            'jumlahDokumentasi'
        ));
    }

    public function detailProker(string $id)
    {
        $proker = Proker::with('divisi')->find($id);

        if (!$proker) {
            abort(404);
        }

        return view('pages.detail-proker', compact('proker'));
    }

    public function viewDokumentasi()
    {
        $proker = Proker::with(['divisi', 'dokumentasi'])
        ->whereHas('dokumentasi')
        ->get();

        $jumlahDivisi = Proker::with('divisi')->get()
            ->pluck('divisi_id')
            ->unique()
            ->count();

        $jumlahProker = Proker::with('divisi')->get()->count();

        $jumlahKegiatan = Proker::with('divisi')->get()
            ->whereNotNull('tanggal_berlangsung')
            ->count();

        $totalPeserta = Proker::with('divisi')->get()->sum('peserta');

        $jumlahDokumentasi = Proker::with('divisi')->get()
            ->flatMap->dokumentasi
            ->count();

        return view('pages.view-dokumentasi', compact(
            'proker',
            'jumlahDivisi',
            'jumlahProker',
            'jumlahKegiatan',
            'totalPeserta',
            'jumlahDokumentasi'
        ));
    }

    public function penugasan()
    {
        $penugasanList = Penugasan::latest('tanggal_upload')->get();

        return view('pages.penugasan', compact('penugasanList'));
    }

    
    public function detailDokumentasi(string $id)
    {
        $proker = Proker::with(['divisi', 'dokumentasi'])
            ->whereHas('dokumentasi')
            ->find($id);

        if (!$proker) {
            abort(404);
        }

        $fotos = $proker->dokumentasi
            ->where('type', 'foto')
            ->values();

        $videos = $proker->dokumentasi
            ->where('type', 'video')
            ->values();

        $semua = $proker->dokumentasi->values();

        return view('pages.detail-dokumentasi', compact(
            'proker',
            'fotos',
            'videos',
            'semua'
        ));
    }
}
?>