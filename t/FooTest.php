<?php

use frolikov\testcase\Foo;

class FooTest extends PHPUnit_Framework_TestCase
{
    /**
     * @param float $number
     * @param       $expectedNumber
     *
     * @dataProvider getDataProvider
     */
    public function testFactorial(float $number, int $expectedNumber)
    {
        $obFoo = new Foo();
        $realNumber = $obFoo->factorial($number);
        $this->assertEquals($expectedNumber, $realNumber);
    }

    public function getDataProvider()
    {
        return [
            [4, 24],
            [9, 362880],
            [6, 720]
        ];
    }
}
