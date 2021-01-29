<?php

namespace App;

class Factorial
{
    public function factorial(int $number): ?int
    {
        if ($number < 1) {
            return false;
        }
        if ($number === 1) {
            return $number;
        } else {
            return $number * $this->factorial($number - 1);
        }
    }

    public function factorialIter(int $number): ?int
    {
        $factorialIter = function ($acc, $number) use (&$factorialIter) {
            if ($number < 1) {
                return false;
            }
            if ($number === 1) {
                return $acc;
            } else {
                return $factorialIter($acc * $number, $number - 1);
            }
        };
        return $factorialIter(1, $number);
    }
}
