<?php

namespace Multiversum\Http\Controllers;

use Multiversum\Http\Controllers\Controller;
use Multiversum\Webinar;

class WebinarsController extends Controller
{
    public function index()
    {
        $webinars = Webinar::paginate(10);
        return view('webinars.index')->with('webinars', $webinars);
    }
}
