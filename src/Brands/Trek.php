<?php

namespace Bike\Brands;

use Bike\Bike;
use Bike\Interfaces\BikeInterface;

class Trek extends Bike implements BikeInterface
{
    public function name(): string
    {
        return 'Trek';
    }

    public function speedCount() : int
    {
        return 16;
    }

    public function color()
    {
        return 'Red';
    }
}