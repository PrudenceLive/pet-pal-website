<?php

namespace PetPal;

class PetPalException extends \Exception
{
    //  parent class for all custom exceptions
}

class InvalidLocationException extends PetPalException
{
    // thrown when an invalid location is encountered
}

class InvalidDogWalkerException extends PetPalException
{
    // thrown when an invalid dog walker is encountered
}

class InvalidPetException extends PetPalException
{
    // thrown when an invalid pet is encountered in the Pet Pal package
}
