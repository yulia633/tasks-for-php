<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Intersect;

class IntersectTest extends TestCase
{
    public function addDataProvider()
    {
        return [
            [[4, 9, 5], [9, 4, 9, 8, 4], [9, 4]],
            [[1, 2, 2, 1], [2, 2], [2, 2]],
            [[1, 2], [2, 1], [2, 1]],
            [[1, 3], [2, 1, 1, 2], [1]],
            [[0], [2, 1, 1, 2], []],
        ];
    }

    /**
     * @dataProvider addDataProvider
     */
    public function testIntersect($list1, $list2, $expected)
    {
        $obj = new Intersect();

        $result = $obj->intersect($list1, $list2);
        $this->assertEquals($expected, $result);
    }
}
