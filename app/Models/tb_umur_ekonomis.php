<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_umur_ekonomis extends Model
{
    use HasFactory;

    protected $fillable = [
        'kelompok',
        'umur_ekonomis',
    ];
}
