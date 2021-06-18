<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\SameParity;

class SameParityTest extends TestCase
{
    public function addDataProvider()
    {
        return [
            [[], []],
            [[5, 0, 1, -3, 10], [5, 1, -3]],
            [[2, 0, 1, -3, 10, -2], [2, 0, 10, -2]],
            [[2, 0, 10, -2], [2, 0, 10, -2]],
            [[-5, 0, 1, -3, 10], [-5, 1, -3]],
        ];
    }
    /**
     * @dataProvider addDataProvider
     */
    public function testGetSameParity($array, $expected)
    {
        $obj = new SameParity();
        $result = $obj->getSameParity($array);
        $this->assertEquals($expected, $result);
    }
}
