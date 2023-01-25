<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
