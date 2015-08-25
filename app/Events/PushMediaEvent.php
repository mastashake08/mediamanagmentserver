<?php

namespace App\Events;
use App\Store;
use App\File;
use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PushMediaEvent extends Event
{
    use SerializesModels;
    public $store;
    public $file
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Store $store, File $file)
    {
        //
        $this->store = $store;
        $this->file = $file;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [$this->store->websocket_channel];
    }
}
