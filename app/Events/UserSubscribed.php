<?php

namespace Multiversum\Events;

use Illuminate\Queue\SerializesModels;
use Multiversum\Events\Event;

class UserSubscribed extends Event
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
     * Get email of subscribed user
     */
    public function getEmail()
    {
        return $this->email;
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