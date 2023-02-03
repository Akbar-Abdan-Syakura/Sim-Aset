<?php

namespace App\Services;

use App\Models\tb_aset;
use Carbon\Carbon;

class GenerateKodeAssetService
{
    public static function getGeneratedKode():string
    {

        $latestAsset = tb_aset::orderBy("id", "DESC")->first();
        $number = "00001";
        if($latestAsset){
            $number = explode("-",$latestAsset->kd_aset);
            $number = $number[1];
            $number =str_pad(intval($number) + 1, strlen($number), "0", STR_PAD_LEFT);
        }
        return "AST-".$number;
    }

}
