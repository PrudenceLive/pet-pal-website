<?php

namespace PetPal\Tests;

use PHPUnit\Framework\TestCase;
use PetPal\Scheduler;

class SchedulerTest extends TestCase
{
    public function testCanBeCreated()
    {
        $scheduler = new Scheduler();
        $this->assertInstanceOf(Scheduler::class, $scheduler);
    }

    public function testCanAddAppointment()
    {
        $scheduler = new Scheduler();
        $scheduler->addAppointment("John Doe", "Spot", "2024-02-20 10:00:00");
        $this->assertCount(1, $scheduler->getAppointments());
    }

    // Add more test methods to cover other functionality of Scheduler class
}
