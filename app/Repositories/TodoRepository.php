<?php

namespace App\Repositories;

use App\Interfaces\TodoInterface;
use App\Models\Todo;
use GuzzleHttp\Psr7\Request;

class TodoRepository implements TodoInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    /**
     * Function: getTodos
     * Description: to get all todos from todoModel
     */
    public function getTodos() 
    {
       return Todo::all();
    }

    public function saveTodo($todoRequest) 
    {
        return Todo::create($todoRequest);
    }
}
