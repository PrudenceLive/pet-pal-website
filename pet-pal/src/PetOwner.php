<?php

namespace PetPal;

class PetOwner
{
    private $name;
    private $pets;

    public function __construct($name)
    {
        $this->name = $name;
        $this->pets = [];
    }

    public function addPet($petName, $species)
    {
        $this->pets[] = new Pet($petName, $species);
    }

    public function listPets()
    {
        $list = "Owned Pets:\n";
        foreach ($this->pets as $pet) {
            $list .= "- {$pet->getName()}, Species: {$pet->getSpecies()}\n";
        }
        return $list;
    }

    // I can add more methods here as needed
}
