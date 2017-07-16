<?php

namespace Bike;

abstract class Bike extends Vehicle
{
    public function wheels() : int
    {
        return 2;
    }

    abstract public function name() : string;

}
