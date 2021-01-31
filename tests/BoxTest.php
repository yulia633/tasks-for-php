<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Box;

class BoxTest extends TestCase
{
    public function addDataProvider()
    {
        return [
            [[
                'a' => 'key',
                'b' => [
                    ['c' => 'key2'],
                    ['d' => 'key5']
                ]
            ], 'key'],
            [
                [
                    'item',
                    'item1',
                    ['item' => 'key'],
                    'item',
                    'item',
                    ['item1' => 'key3'],
                ], 'key'
            ],
        ];
    }

    /**
     * @dataProvider addDataProvider
     */
    public function testBox($list1, $expected)
    {
        $obj = new Box();

        $result = $obj->box($list1);
        $this->assertEquals($expected, $result);

        $result2 = $obj->boxIter($list1);
        $this->assertEquals($expected, $result2);
    }
}
