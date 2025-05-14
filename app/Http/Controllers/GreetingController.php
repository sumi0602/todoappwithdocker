<?php

namespace App\Http\Controllers;

use App\Services\RoleGreetingService;

class GreetingController extends Controller
{
    private $roleGreeting;

    public function __construct(RoleGreetingService $roleGreeting)
    {
        $this->roleGreeting = $roleGreeting;
    }
    public function showGreetings($role)
    {
       return $this->roleGreeting->getGreeting($role);
    }
}
