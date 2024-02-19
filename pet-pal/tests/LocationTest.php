<?php

namespace PetPal\Tests;

use PHPUnit\Framework\TestCase;
use PetPal\Location;

class LocationTest extends TestCase
{
    public function testCanBeCreated()
    {
        $location = new Location(40.7128, -74.0060);
        $this->assertInstanceOf(Location::class, $location);
    }

    public function testCanGetLatitude()
    {
        $location = new Location(40.7128, -74.0060);
        $this->assertEquals(40.7128, $location->getLatitude());
    }

    // Add more test methods to cover other functionality of Location class
}
