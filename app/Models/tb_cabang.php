<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Validation\Rules\Unique;

class tb_cabang extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // protected $fillable = [
    //     'nama_cbng',
    //     'alamat',
    // ];

    public function aset()
    {
        return $this->hasMany(tb_aset::class, 'cabang_id', 'id');
    }
}
