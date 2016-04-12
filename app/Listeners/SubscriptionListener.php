<?php

namespace Multiversum\Listeners;

use Mail;
use Multiversum\Events\UserSubscribed;

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
        Mail::send('emails.notification', ['email' => $event->getEmail()], function ($mail) {});

        $email = $event->getEmail();
        Mail::send('emails.subscription', [], function ($mail) use ($email) {
            $mail->to($email); //->subject('Подписка');
        });
    }
}
