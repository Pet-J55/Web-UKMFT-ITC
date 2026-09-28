<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penugasan extends Model
{
    protected $fillable = [
        'file_pdf',
        'deskripsi',
        'tanggal_upload',
        'kategori',
    ];

    protected $casts = [
        'tanggal_upload' => 'datetime',
    ];
}