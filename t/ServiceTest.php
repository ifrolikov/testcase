<?php

use frolikov\testcase\Service;
use frolikov\testcase\Bar;
use frolikov\testcase\Foo;

class ServiceTest extends PHPUnit_Framework_TestCase
{
    /**
     * @param integer $params
     * @param         $expectedNumber
     *
     * @dataProvider getDataProvider
     */
    public function testCalculate(int $number, int $expectedNumber)
    {
        $obService = new Service(new Bar(), new Foo());
        $realNumber = $obService->calculate($number);
        $this->assertEquals($expectedNumber, $realNumber);
    }

    public function getDataProvider()
    {
        return [
            [16, 24],
            [81, 362880],
            [36, 720],
        ];
    }
}
