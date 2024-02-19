<?php

namespace PetPal;

class Scheduler
{
    private $tasks;

    public function __construct()
    {
        $this->tasks = [];
    }

    public function addTask($task)
    {
        $this->tasks[] = $task;
    }

    public function getTasks()
    {
        return $this->tasks;
    }

    // Add more methods here as needed
}
