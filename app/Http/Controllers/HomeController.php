<?php

namespace Multiversum\Http\Controllers;

use Multiversum\Http\Requests;
use Illuminate\Http\Request;
use Multiversum\Video;
use Multiversum\User;

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
        $previews = Video::where('type', 'preview')->get();
        $lectures = Video::where('type', 'lecture')->get();

        return view('index', compact('previews', 'lectures'));
    }

    /**
     * Show the specified video.
     *
     * @return \Illuminate\Http\Response
     */
    public function video($id, Request $request)
    {
        $video = Video::find($id);

        return view('video', compact('video', 'request'));
    }

    public function email(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name'    => 'required|string',
            'email'   => 'required|email',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        \Mail::send('emails.feedback', ['text' => $request->message], function ($m) use ($request) {
            $m->from($request->email, $request->name);
            $m->to('i.i.babko@gmail.com', 'Тина Васильева')->subject('Сообщение');
        });

        return response()->json(['notify' => 'Письмо отправлено успешно']);
    }

    public function profile(Request $request)
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

        return response()->json(['notify' => 'Профиль успешно обновлен']);
    }

    public function payment(Request $request)
    {
        User::where('email', $request->input('order_id'))->update(['isPremium' => true]);
    }
}
