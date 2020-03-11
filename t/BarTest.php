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
    public function testSqrt(int $params)
    {
        $expectedNumber = 4;
        $number = new Bar();
        $realNumber = $number->sqrt($params);
        $this->assertEquals($expectedNumber, $realNumber);
    }

    public function getDataProvider()
    {
        return [
            [16],
        ];
    }
}
