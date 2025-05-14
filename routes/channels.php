<?php

use Illuminate\Support\Facades\Broadcast;
use App\Models\Todo;

Broadcast::channel('todo.{id}', function ($user, $id) {
    return (int) $user->id === (int) Todo::findOrFail($id)->id;
});

