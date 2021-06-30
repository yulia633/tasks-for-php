<?php

namespace App;

class Intersect
{
    public function intersect(array $numbers1, array $numbers2): array
    {
        $result = [];

        $map = array_reduce($numbers1, function ($acc, $item) {
            if (!array_key_exists($item, $acc)) {
                $acc[$item] = 1;
            } else {
                $acc[$item] += 1;
            }

            return $acc;
        }, []);


        for ($i = 0; $i < count($numbers2); $i += 1) {
            $current = $numbers2[$i];

            $count = $map[$current] ?? null;

            if ($count && $count > 0) {
                $result[] = $current;
                $map[$current] -= 1;
            }
        }

        return $result;
    }
}
