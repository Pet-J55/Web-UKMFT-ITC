<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    protected $fillable = [
        'proker_id',
        'type',
        'file',
        'embed',
        'thumbnail',
        'caption',
        'durasi',
    ];

    public function proker()
    {
        return $this->belongsTo(Proker::class);
    }
}
