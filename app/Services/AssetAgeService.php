<?php

namespace App\Services;

use Carbon\Carbon;

class AssetAgeService
{
    public static function setAssetAge(&$requestedData): void
    {
        $purchasingDate = $requestedData["tgl_perolehan"];
        $purchasingDate = Carbon::parse($purchasingDate);

        $diff = $purchasingDate->diffInYears(Carbon::now());
        $requestedData["usia_aset"] = $diff;
    }

    public static function getAssetAge($date)
    {
        $purchasingDate = Carbon::parse($date);
        $diff = $purchasingDate->diffInYears(Carbon::now());
        return $diff;
    }
}
