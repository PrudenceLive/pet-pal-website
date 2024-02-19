<?php

namespace PetPal\Tests;

use PHPUnit\Framework\TestCase;
use PetPal\Helpers;

class HelpersTest extends TestCase
{
    public function testCalculateDistance()
    {
        $location1 = new Location(40.7128, -74.0060);
        $location2 = new Location(34.0522, -118.2437);
        $distance = Helpers::calculateDistance($location1, $location2);
        $this->assertIsFloat($distance);
    }

    // Add more test methods to cover other functionality of Helpers class
}
