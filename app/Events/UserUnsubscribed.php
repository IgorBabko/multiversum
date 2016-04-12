<?php

namespace Multiversum\Events;

use Illuminate\Queue\SerializesModels;
use Multiversum\Events\Event;

class UserUnsubscribed extends Event
{
    use SerializesModels;

    protected $email;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
