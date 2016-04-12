<?php

namespace Multiversum\Listeners;

use Mail;
use Multiversum\Events\UserUnsubscribed;

class UnsubscriptionListener
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
     * @param  UserUnsubscribed  $event
     * @return void
     */
    public function handle(UserUnsubscribed $event)
    {
        Mail::send('emails.notification', ['message' => 'Пользователь с email ' . $event->getEmail() . ' отписался от рассылки'], function ($mail) {
            $mail->subject('Пользователь отписался');
        });

        $email = $event->getEmail();
        Mail::send('emails.subscription', [], function ($mail) use ($email) {
            $mail->to($email)->subject('Вы успешно отписались от Multiversum');
        });
    }
}
