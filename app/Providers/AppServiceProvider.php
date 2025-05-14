<?php

namespace App\Providers;

use App\Events\EventRegister;
use App\Interfaces\TodoInterface;
use App\Listeners\LogUserListener;
use App\Models\Todo;
use App\Observers\TodoObserver;
use App\Repositories\TodoRepository;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(TodoInterface::class,TodoRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
