<?php

namespace App;

class Sum
{
    public function sum(int $number): int
    {
        if ($number < 1) {
            return $number;
        } else {
            return ($number * ($number + 1)) / 2;
        }
    }

    public function sumIter(int $number): int
    {
        $sumIter = function ($number, $acc) use (&$sumIter) {
            if ($number < 1) {
                return $acc;
            }
            return $number * $sumIter($acc * $number, $number + 1) / 2;
        };
        return $sumIter($number, 0);
    }
}
