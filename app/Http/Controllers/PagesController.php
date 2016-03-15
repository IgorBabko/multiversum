<?php

namespace Multiversum\Http\Controllers;

use Multiversum\Http\Controllers\Controller;
use Multiversum\Http\Requests\SendEmailRequest;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function email()
    {
        return view('pages.email');
    }

    public function sendEmail(SendEmailRequest $sendEmailRequest)
    {
        // send email
        return view('pages.index');
    }
}
