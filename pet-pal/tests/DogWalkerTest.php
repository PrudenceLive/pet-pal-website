<?php

namespace PetPal\Tests;

use PHPUnit\Framework\TestCase;
use PetPal\DogWalker;

class DogWalkerTest extends TestCase
{
    public function testCanBeCreated()
    {
        $dogWalker = new DogWalker("John Doe", "john@example.com");
        $this->assertInstanceOf(DogWalker::class, $dogWalker);
    }

    public function testCanGetFullName()
    {
        $dogWalker = new DogWalker("John Doe", "john@example.com");
        $this->assertEquals("John Doe", $dogWalker->getFullName());
    }

    // Add more test methods to cover other functionality of DogWalker class
}

