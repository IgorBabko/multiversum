<?php

namespace Multiversum\Http\Controllers;

use Illuminate\Http\Request;
use Multiversum\Http\Controllers\Controller;
use Multiversum\Webinar;

class WebinarsController extends Controller
{
    public function index()
    {
        $webinars = Webinar::paginate(10);
        return view('webinars.index')->with('webinars', $webinars);
    }

    public function showWebinar(Request $request, $slug)
    {
        $webinar = Webinar::whereSlug($slug)->firstOrFail();

        return view('webinars.show', compact('request', 'webinar'));
    }
}
