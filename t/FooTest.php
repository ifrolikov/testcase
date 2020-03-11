<?php

use frolikov\testcase\Foo;

class FooTest extends PHPUnit_Framework_TestCase
{
    /**
     * @param float $params
     * @param       $expectedNumber
     *
     * @dataProvider getDataProvider
     */
    public function testFactorial(float $params)
    {
        $expectedNumber = 24;
        $number = new Foo();
        $realNumber = $number->factorial($params);
        $this->assertEquals($expectedNumber, $realNumber);
    }

    public function getDataProvider()
    {
        return [
            [4],
        ];
    }
}
