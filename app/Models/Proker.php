<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Proker extends Model
{
    protected $fillable = [
        'foto',
        'nama',
        'deskripsi',
        'lokasi',
        'peserta',
        'tanggal_berlangsung',
        'divisi_id',
    ];

    protected $casts = [
        'tanggal_berlangsung' => 'date',
    ];

    public function divisi(): BelongsTo
    {
        return $this->belongsTo(Divisi::class);
    }
    public function dokumentasi()
    {
        return $this->hasMany(Dokumentasi::class);
    }
}