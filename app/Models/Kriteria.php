<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    protected $fillable = [
        "nama", "kode", "golongan_id"
    ];


    public function golongan()
    {
        return $this->belongsTo(Golongan::class);
    }
}
