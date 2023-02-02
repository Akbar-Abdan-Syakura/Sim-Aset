<?php

namespace App\Statics;

class BobotStatic{
    public const USIA_ASET = [
        [
            "lower" => 1,
            "upper" => 2,
            "bobot"=> 1
        ],
        [
            "lower" => 3,
            "upper" => 4,
            "bobot"=> 2
        ],
        [
            "lower" => 5,
            "upper" => 8,
            "bobot"=> 3
        ],
        [
            "lower" => 9,
            "bobot"=> 4
        ],
    ];

    public const BIAYA_ASET = [
        [
            "lower" => 100,
            "upper" => 1000000,
            "bobot" => 1
        ],
        [
            "lower" => 1000000,
            "upper" => 5000000,
            "bobot" => 2
        ],
        [
            "lower" => 5000000,
            "upper" => 10000000,
            "bobot" => 3
        ],
        [
            "lower" => 10000000,
            "bobot" => 4
        ],
    ];
}

?>
