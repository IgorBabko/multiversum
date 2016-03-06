<?php

namespace Multiversum\Http\Controllers;

use Multiversum\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
}
