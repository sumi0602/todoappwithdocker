<?php

namespace App\Observers;

use App\Models\Todo;
use Illuminate\Support\Facades\Log;

class TodoObserver
{
    /**
     * Handle the Todo "created" event.
     */
    public function created(Todo $todo): void
    {
        Log::info('Todo is being created: ' . $todo->title);
    }

    /**
     * Handle the Todo "updated" event.
     */
    public function updated(Todo $todo): void
    {
       Log::info('Todo is being updated: ' . $todo->title);
    }

    /**
     * Handle the Todo "deleted" event.
     */
    public function deleted(Todo $todo): void
    {
         Log::info('Todo is being deleted: ' . $todo->title);
    }

    /**
     * Handle the Todo "restored" event.
     */
    public function restored(Todo $todo): void
    {
        //
         Log::info('Todo is being restored: ' . $todo->title);
    }

    /**
     * Handle the Todo "force deleted" event.
     */
    public function forceDeleted(Todo $todo): void
    {
        //
    }
}
