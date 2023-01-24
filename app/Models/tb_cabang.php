<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_cabang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_cbng',
        'alamat',
    ];

    public function aset()
    {
        return $this->hasMany(tb_aset::class, 'cabang_id', 'id');
    }
}
