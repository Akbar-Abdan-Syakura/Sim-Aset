<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_pengajuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kd_pengajuan',
        'user_id',
        'nama_aset',
        'qty',
        'harga',
        "status"
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
