<?php

namespace App\Models;

use Database\Factories\AssetFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_aset extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return AssetFactory::new();
    }

    protected $fillable = [
        'category_id',
        'kd_aset',
        'tgl_perolehan',
        'cabang_id',
        'penempatan_id',
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



    public function kondisi()
    {
        return $this->belongsTo(tb_kondisi::class, 'kondisi_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
