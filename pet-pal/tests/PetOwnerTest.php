<?php

namespace PetPal\Tests;

use PHPUnit\Framework\TestCase;
use PetPal\PetOwner;
use PetPal\Pet;

class PetOwnerTest extends TestCase
{
    public function testCanBeCreated()
    {
        $petOwner = new PetOwner("Jane Doe");
        $this->assertInstanceOf(PetOwner::class, $petOwner);
    }

    public function testCanAddPet()
    {
        $petOwner = new PetOwner("Jane Doe");
        $petOwner->addPet("Max", "Dog");
        $this->assertCount(1, $petOwner->getPets());
    }

    // Add more test methods to cover other functionality of PetOwner class
}
