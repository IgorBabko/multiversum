<?php

namespace Multiversum\Http\Controllers;

use Multiversum\Http\Controllers\Controller;

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

    public function send()
    {
        return view('pages.index');
    }
}
