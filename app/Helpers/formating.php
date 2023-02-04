<?php

use Carbon\Carbon;

function intToRupiah(int $price)
{
    return "Rp " . number_format($price, 2, ',', '.');
}

function rupiahToInt(string $rupiah)
{
    # code...
}

function getUsiaAsset($date)
{
    $purchasingDate = Carbon::parse($date);
    $diff = $purchasingDate->diffInYears(Carbon::now());
    return $diff;
}
