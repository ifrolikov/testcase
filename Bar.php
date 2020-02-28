<?php
declare(strict_types=1);

namespace frolikov\testcase;

class Bar implements BarInterface
{
    public function sqrt(int $number): float
    {
        return sqrt($number);
    }
}
