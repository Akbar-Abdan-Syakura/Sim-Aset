<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Kriteria;

class GenerateKodeCategoryService
{
    public static function getGeneratedKode(array $requestedData): string
    {
        $kriteria = Kriteria::with("golongan")->where("id", $requestedData["kriteria_id"])->first();
        $latestAsset = Category::orderBy("id", "DESC")->where("kriteria_id", $requestedData["kriteria_id"])->first();
        $number = "001";
        if ($latestAsset) {
            $number = explode(".", $latestAsset->kd_category);
            $number = $number[2];
            $number = str_pad(intval($number) + 1, strlen($number), "0", STR_PAD_LEFT);
        }
        return $kriteria->golongan->kode . "." . $kriteria->kode. "." . $number;
    }
}
