<?php

namespace Multiversum\Listeners;

use Multiversum\Events\UserSubscribed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubscriptionListener
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
     * @param  UserSubscribed  $event
     * @return void
     */
    public function handle(UserSubscribed $event)
    {
        Mail::send('emails.notification', ['email' => $event->email]);

        Mail::send('email.subscription', function ($mail) use ($email = $event->email) {
            $mail->to($email);
        });
    }
}
