<?php

namespace Multiversum\Http\Controllers;

use Multiversum\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layout');
    }

    public function sendEmail(Request $request)
    {
        \Mail::send('emails.contact', ['text' => $request->message], function ($m) use ($request) {
            $m->from($request->email, $request->name);
            $m->to('portaciya@gmail.com', 'Тина Васильева')->subject('Сообщение');
        });

        return response()->json(['message' => 'Письмо отправлено успешно']);
    }

    public function updateProfile(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'email'    => 'email|unique:users,email,' . Auth::user()->id,
            'password' => 'min:8|confirmed',
        ]);

        $user = Auth::user();

        $user->email = $request->email;

        if (!empty($request->password)) {
            $user->password = $request->password;
        }

        $user->save();

        return response()->json(['message' => 'Профиль успешно обновлен']);
    }
}
