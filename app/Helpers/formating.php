<?php

function intToRupiah(int $price)
{
    return "Rp " . number_format($price, 2, ',', '.');
}
