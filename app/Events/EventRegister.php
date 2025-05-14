<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EventRegister implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $todo;
    /**
     * Create a new event instance.
     */
    public function __construct($todo)
    {
        //
        $this->todo = $todo;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn()
    {
        return new PrivateChannel('todo-created');
    }

    public function broadcastWith() : array 
    {
        return [
            'title'=> $this->todo->title,
            'description'=> $this->todo->description
        ];
    }

    public function broadcastAs() : string
    {
        return 'todo-created';
    }
}
