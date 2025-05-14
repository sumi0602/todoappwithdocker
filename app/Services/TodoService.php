<?php

namespace App\Services;

use App\Interfaces\TodoInterface;

class TodoService
{
    protected $todoInterface;
    /**
     * Create a new class instance.
     */
    public function __construct(TodoInterface $todoInterface)
    {
        //
        $this->todoInterface = $todoInterface;
    }

    public function getTodos() 
    {
        return $this->todoInterface->getTodos();
    }

    public function saveTodo($request) 
    {
        $todo = $this->mapTodoFormData($request);
        return $this->todoInterface->saveTodo($todo);
    }
    public function mapTodoFormData($request) 
    {
        return [
            'title'=>$request->title,
            'description'=> $request->description
        ];
    }
}
