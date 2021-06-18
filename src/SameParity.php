<?php

namespace App;

class SameParity
{
    public function isEven(int $num): int
    {
        return abs($num % 2);
    }

    public function getSameParity(array $numbers): array
    {
        if (count($numbers) === 0) {
            return $numbers;
        }

        [$firstNum] = $numbers;
        $parity = $this->isEven($firstNum);

        $filtred = array_filter($numbers, fn ($num) => $parity === (abs($num % 2)));

        return array_values($filtred);
    }
}
