<?php

namespace App;

class LargestPairSum
{
    public function pairSum(array $list): int
    {
        rsort($list);

        if (empty($list)) {
            return 0;
        }

        if (count($list) === 1) {
            return $list[0];
        }
        return array_sum([$list[0], $list[1]]);
    }
}
