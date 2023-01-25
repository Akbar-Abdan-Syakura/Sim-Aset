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
        'penempatan_id',
        'spek',
        'qty',
        'umur_ekonomis_id',
        'usia_aset',
        'kondisi_id',
        'harga'
    ];
    public function cabang()
    {
        return $this->belongsTo(tb_cabang::class, 'cabang_id', 'id');
    }

    public function penempatan()
    {
        return $this->belongsTo(tb_penempatan::class, 'penempatan_id', 'id');
    }

    public function umur()
    {
        return $this->belongsTo(tb_umur_ekonomis::class, 'umur_ekonomis_id', 'id');
    }

    public function kondisi()
    {
        return $this->belongsTo(tb_kondisi::class, 'kondisi_id', 'id');
    }
}
