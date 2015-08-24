<?php

namespace App\Listeners;

use App\Events\PushMediaEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PushMediaEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PushMediaEvent  $event
     * @return void
     */
    public function handle(PushMediaEvent $event)
    {
        //
    }
}
