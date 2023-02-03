<?php

namespace App\Services;

use App\Models\tb_aset;
use App\Models\tb_pengajuan;

class GenerateKodePengajuanService
{
    public static function getGeneratedKode(): string
    {
        $latestPengajuan = tb_pengajuan::orderBy("id", "DESC")->first();
        $number = "00001";
        if ($latestPengajuan) {
            $number = explode("-", $latestPengajuan->kd_pengajuan);
            $number = $number[1];
            $number = str_pad(intval($number) + 1, strlen($number), "0", STR_PAD_LEFT);
        }
        return "PENGAJUAN-$number";
    }
}
