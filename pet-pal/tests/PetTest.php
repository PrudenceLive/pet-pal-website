<?php

namespace PetPal\Tests;

use PHPUnit\Framework\TestCase;
use PetPal\Pet;

class PetTest extends TestCase
{
    public function testCanBeCreated()
    {
        $pet = new Pet("Max", "Dog");
        $this->assertInstanceOf(Pet::class, $pet);
    }

    public function testCanGetName()
    {
        $pet = new Pet("Max", "Dog");
        $this->assertEquals("Max", $pet->getName());
    }

    // Add more test methods to cover other functionality of Pet class
}
