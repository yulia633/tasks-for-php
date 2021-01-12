<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\LargestPairSum;

class LargestPairSumTest extends TestCase
{
    public function addDataProvider()
    {
        return [
            [[1], 1],
            [[1, 2, 3, 4, 5, 6], 11],
            [[12, 34, 10, 6, 40], 74],
            [[12, 40, 10, 6, 40], 80],
            [[12, -34, 10, 6, 40], 52],
        ];
    }

    /**
     * @dataProvider addDataProvider
     */
    public function testLargestPairSum($list, $expected)
    {
        $obj = new LargestPairSum();
        $result = $obj->pairSum($list);
        $this->assertSame($expected, $result);
    }
}
