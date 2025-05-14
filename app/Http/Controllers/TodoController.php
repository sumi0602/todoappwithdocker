<?php

namespace App\Http\Controllers;

use App\Events\EventRegister;
use App\Http\Requests\TodoFormRequest;
use App\Services\TodoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

class TodoController extends Controller
{
    public $todoService;
    /**
     * Create a new class instance.
     */
    public function __construct(TodoService $todoService)
    {
        $this->todoService = $todoService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = $this->todoService->getTodos();
        return view('todos.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TodoFormRequest $request)
    {

        $todo = $this->todoService->saveTodo($request);

        if ($todo) {
            Event::dispatch(new EventRegister($todo));
            return back()->with('success', 'Todo created successfully');
        }
        return back()->with('error', 'Failed creation of todo');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
