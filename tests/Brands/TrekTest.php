<?php

namespace Bike\Tests\Brands;

use Bike\Brands\Trek;
use PHPUnit\Framework\TestCase;

class TrekTest extends TestCase
{
    /**
     * @var Trek
     */
    private $trek;

    public function setup()
    {
        $this->trek = new Trek();
    }

    public function testCanCreateInstance()
    {
        $this->assertInstanceOf(Trek::class, $this->trek);
    }

    public function testBrandIsString()
    {
        $this->assertTrue(is_string($this->trek->name()));
    }

    public function testBrandIsTrek()
    {
        $this->assertEquals('Trek', $this->trek->name());
    }

    public function testSpeedsIsInteger()
    {
        $this->assertTrue(is_int($this->trek->speedCount()));
    }

    public function testColorIsString()
    {
        $this->assertTrue(is_string($this->trek->color()));
    }
}
