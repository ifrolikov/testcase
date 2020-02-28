<?php
declare(strict_types=1);

use frolikov\testcase\Bar;
use frolikov\testcase\Foo;
use frolikov\testcase\Service;

require_once __DIR__.'/vendor/autoload.php';

$number = (int)$argv[1];

$service = new Service(
    new Bar(),
    new Foo()
);

printf("Calculation result for %d: %.2f\n", $number, $service->calculate($number));
