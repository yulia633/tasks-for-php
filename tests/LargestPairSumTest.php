<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

use App\LargestPairSum;

class LargestPairSumTest extends TestCase
{
    public function testLargestPairSum()
    {
        $obj = new LargestPairSum();

        $listFirst = [1];
        $this->assertEquals(1, $obj->pairSum($listFirst));

        $listSecond = [1, 2, 3, 4, 5, 6];
        $this->assertEquals(11, $obj->pairSum($listSecond));

        $listThird = [12, 34, 10, 6, 40];
        $this->assertEquals(74, $obj->pairSum($listThird));

        $listFourth = [12, 40, 10, 6, 40];
        $this->assertEquals(80, $obj->pairSum($listFourth));

        $listFourth = [12, -34, 10, 6, 40];
        $this->assertEquals(52, $obj->pairSum($listFourth));
    }
}
