<?php

use frolikov\testcase\Bar;

class BarTest extends PHPUnit_Framework_TestCase
{
    /**
     * @param integer $params
     * @param         $expectedNumber
     *
     * @dataProvider getDataProvider
     */
    public function testSqrt(int $number, int $expectedNumber)
    {
        $obBar = new Bar();
        $realNumber = $obBar->sqrt($number);
        $this->assertEquals($expectedNumber, $realNumber);
    }

    public function getDataProvider()
    {
        return [
            [16, 4],
            [81, 9],
            [36, 6]
        ];
    }
}
