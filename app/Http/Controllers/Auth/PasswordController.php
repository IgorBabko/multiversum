<?php

namespace Multiversum\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\ResetsPasswords;
use Multiversum\Http\Controllers\Controller;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
     */

    use ResetsPasswords;

    protected $redirectTo = '/';

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get the response for after the reset link has been successfully sent.
     *
     * @param  string  $response
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function getSendResetLinkEmailSuccessResponse($response)
    {
        \Session::flash('notify', \Lang::get('passwords.sent'));
        return redirect()->back()->with('status', trans($response));
    }
}
