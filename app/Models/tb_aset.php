<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_aset extends Model
{
    use HasFactory;

    protected $fillable = [
        'kd_aset',
        'nama',
        'tgl_perolehan',
        'cabang_id',
        'spek',
        'qty',
        'umur_ekonomis_id',
        'usia_aset',
        'konndisi_id',
        'harga',
    ];
    public function cabang()
    {
        return $this->belongsTo(tb_cabang::class, 'cabang_id', 'id');
    }
}
