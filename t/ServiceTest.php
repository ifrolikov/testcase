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
    public function testCalculate(int $params)
    {
        $expectedNumber = 24;
        $service = new Service(new Bar(), new Foo());
        $realNumber = $service->calculate($params);
        $this->assertEquals($expectedNumber, $realNumber);
    }

    public function getDataProvider()
    {
        return [
            [16],
        ];
    }
}
