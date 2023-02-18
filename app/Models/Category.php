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
}
