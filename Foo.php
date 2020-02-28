<?php
declare(strict_types=1);

namespace frolikov\testcase;

class Foo implements FooInterface
{
    public function factorial(float $number): float
    {
        $result = 1;
        while ($number > 0) {
            $result *= --$number;
        }
        return $result;
    }
}
