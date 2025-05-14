<?php

namespace App\Services\GreetingStrategies;

use App\Interfaces\GreetingInterface;

class AdminGreeting implements GreetingInterface
{
    public function greet(): string {
        return "Hey admin you are greeted";
    }
}
