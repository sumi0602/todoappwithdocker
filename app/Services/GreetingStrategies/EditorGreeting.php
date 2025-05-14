<?php

namespace App\Services\GreetingStrategies;

use App\Interfaces\GreetingInterface;

class EditorGreeting implements GreetingInterface
{
    public function greet(): string {
        return "Hey editor you are greeted";
    }
}
