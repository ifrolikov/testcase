<?php
declare(strict_types=1);

namespace frolikov\testcase;

class Service
{
    /**
     * @var BarInterface
     */
    private $bar;
    /**
     * @var FooInterface
     */
    private $foo;
    
    public function __construct(BarInterface $bar, FooInterface $foo)
    {
        $this->bar = $bar;
        $this->foo = $foo;
    }
    
    public function calculate(int $number): float
    {
        return $this->foo->factorial($this->bar->sqrt($number));
    }
}
