<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function umur()
    {
        return $this->belongsTo(tb_umur_ekonomis::class, 'umur_ekonomis_id', 'id');
    }

    public function aset()
    {
        return $this->hasMany(tb_aset::class);
    }

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }
}
