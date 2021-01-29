<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Factorial;

class FactorialTest extends TestCase
{
    public function addDataProvider()
    {
        return [
            [0, false],
            [1, 1],
            [2, 2],
            [3, 6],
            [5, 120],
            [10, 3628800],
        ];
    }

    /**
     * @dataProvider addDataProvider
     */
    public function testFactorial1($list1, $expected)
    {
        $obj = new Factorial();

        $result = $obj->factorial($list1);
        $this->assertEquals($expected, $result);

        $result2 = $obj->factorialIter($list1);
        $this->assertEquals($expected, $result2);
    }
}
