<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\ReverseString;

class ReverseStringTest extends TestCase
{
    public function addDataProvider()
    {
        return [
            ["Hello world!", "!dlrow olleH"],
            [" ", " "],
            ["!dlrow olleH", "Hello world!"],
            ["!dlrowolleH11", "11Helloworld!"],
        ];
    }

    /**
     * @dataProvider addDataProvider
     */
    public function testReverseString1($list1, $expected)
    {
        $obj = new ReverseString();
        $result = $obj->reverseStrRec($list1);
        $this->assertSame($expected, $result);
    }

    public function testReverseString2()
    {
        $obj = new ReverseString();

        $str1 = " ";
        $this->assertEquals(" ", $obj->reverseStrRec($str1));

        $str2 = "!dlrow olleH";
        $this->assertEquals("Hello world!", $obj->reverseStrRecIter($str2));

        $str3 = "11Helloworld!";
        $this->assertEquals("!dlrowolleH11", $obj->reverseStrRecIter($str3));
    }
}
