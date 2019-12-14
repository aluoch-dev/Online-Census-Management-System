<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserRegistered implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $national_id; 

    public $message;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($national_id)
    {
        $this->national_id = $national_id;
        $this->message = " {$national_id} registered as a new user";
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return ['user-registered'];
    }
}
