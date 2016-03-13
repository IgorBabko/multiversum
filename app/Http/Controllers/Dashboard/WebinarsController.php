<?php

namespace Multiversum\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Multiversum\Http\Controllers\Controller;
use Multiversum\Http\Requests\StoreWebinarRequest;
use Multiversum\Webinar;
use Session;

class WebinarsController extends Controller
{
    /**
     * Display a listing of the webinars.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $webinars = Webinar::orderBy('published_at', 'desc')->get();
        return view('dashboard.webinars.index', compact('webinars'));
    }

    /**
     * Show the form for creating a new webinars.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.webinars.create');
    }

    /**
     * Store a newly created webinars in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, StoreWebinarRequest $storeWebinarReqest)
    {
        $webinar = new Webinar($request->except('file'));

        $webinar->save();

        Session::flash('success', 'Вебинар добавлен успешно');

        return redirect('dashboard/webinars');
    }

    /**
     * Display the specified webinars.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified webinars.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified webinars in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified webinar from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Webinar::destroy($id);

        Session::flash('success', 'Вебинар успешно удален');

        return back();
    }
}
