<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<string, array<int, class-string>>
     */
    protected $listen = [
        // Aquí van tus eventos y listeners, ej:
        // \App\Events\SomeEvent::class => [
        //     \App\Listeners\SomeListener::class,
        // ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        parent::boot();
    }
}
