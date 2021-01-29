<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Sum;

class SumTest extends TestCase
{
    public function addDataProvider()
    {
        return [
            [0, 0],
            [5, 15],
            [100, 5050],
            [200, 20100],
        ];
    }

    /**
     * @dataProvider addDataProvider
     */
    public function testSum1($list1, $expected)
    {
        $obj = new Sum();

        $result = $obj->sum($list1);
        $this->assertEquals($expected, $result);

        $result2 = $obj->sumIter($list1);
        $this->assertEquals($expected, $result2);
    }
}
