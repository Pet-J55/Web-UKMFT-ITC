<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Divisi extends Model
{
    protected $fillable = [
        'nama_divisi',
    ];

    public function anggota(): HasMany
    {
        return $this->hasMany(Anggota::class);
    }

    public function proker(): HasMany
    {
        return $this->hasMany(Proker::class);
    }
}