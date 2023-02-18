<?php

namespace App\Services;

use App\Models\Category;

class GenerateKodeCategoryService
{
    public static function getGeneratedKode(): string
    {
        $latestAsset = Category::orderBy("id", "DESC")->first();
        $number = "00001";
        if ($latestAsset) {
            $number = explode("-", $latestAsset->kd_category);
            $number = $number[1];
            $number = str_pad(intval($number) + 1, strlen($number), "0", STR_PAD_LEFT);
        }
        return "AST-" . $number;
    }
}
