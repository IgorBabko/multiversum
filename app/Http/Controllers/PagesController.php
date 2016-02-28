<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        // echo \Request::route()->getName();
        return view('pages.index');
    }

    public function webinars()
    {
        // echo \Request::route()->getName();
        return view('pages.webinars');
    }
}
