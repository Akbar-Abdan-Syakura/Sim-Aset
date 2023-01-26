<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_pengajuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kd_pengajuan' => 'required|unique:tb_pengajuans',
        'nama_user' => 'required',
        'nama_aset' => 'required',
        'qty' => 'required',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
