<?php

namespace App\Listeners;

use App\Events\EventRegister;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class LogUserListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(EventRegister $event): void
    {
       Log::info("Event fired on creation as ".$event->todo->title);
    }
}
