<?php

namespace App\Helpers;

class FormatIdr
{
    public static function rupiah($angka)
    {
        $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
        return $hasil_rupiah;
    }
}
