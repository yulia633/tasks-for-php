<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\CheckBrackets;

class CheckBracketsTest extends TestCase
{
    public function addDataProvider()
    {
        return [
            ["( {)  }", false],
            ["()[]{}<>", true],
            ["<(){[]}>", true],
            ["())>", false],
            ["()(", false],
            ["{)][(}", false],
        ];
    }

    /**
     * @dataProvider addDataProvider
     */
    public function testCheckBrackets($list, $expected)
    {
        $obj = new CheckBrackets();
        $result = $obj->check($list);
        $this->assertEquals($expected, $result);
    }
}
