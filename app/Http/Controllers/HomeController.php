<?php

namespace Multiversum\Http\Controllers;

use Illuminate\Http\Request;

use Multiversum\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
        return view('layout');
    } 
}
