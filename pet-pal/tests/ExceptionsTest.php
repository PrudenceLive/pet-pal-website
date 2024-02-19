<?php

namespace PetPal\Tests;

use PHPUnit\Framework\TestCase;
use PetPal\Exceptions\InvalidLocationException;
use PetPal\Exceptions\InvalidDogWalkerException;
use PetPal\Exceptions\InvalidPetException;

class ExceptionsTest extends TestCase
{
    public function testInvalidLocationExceptionCanBeThrown()
    {
        $this->expectException(InvalidLocationException::class);
        throw new InvalidLocationException();
    }

    // Add more test methods to cover other custom exceptions
}
