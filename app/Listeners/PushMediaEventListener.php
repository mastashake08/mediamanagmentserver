<?php

namespace App\Listeners;
use LRedis;
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

        $redis = LRedis::connection();
    		$redis->publish($event->store->websocket_channel,json_encode(['media_content' => $event->file->url]));
        
    }
}
