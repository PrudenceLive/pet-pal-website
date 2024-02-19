<?php

namespace PetPal;

class Pet
{
    private $name;
    private $species;

    public function __construct($name, $species)
    {
        $this->name = $name;
        $this->species = $species;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSpecies()
    {
        return $this->species;
    }

    // Add more methods here as needed
}

