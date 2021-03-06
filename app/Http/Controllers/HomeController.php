<?php

namespace Multiversum\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Log;
use Mail;
use Multiversum\User;
use Multiversum\Video;

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
    public function index(Request $request)
    {
        $previews = Video::orderBy('id', 'asc')->where('type', 'preview')->get();
        $lectures = Video::orderBy('id', 'asc')->where('type', 'lecture')->get();
        $webinars = Video::orderBy('id', 'asc')->where('type', 'webinar')->get();

        if ($request->paid) {
            $request->session()->flash('notify', 'Спасибо за оплату, теперь Вам доступны видео-лекции');
        }

        return view('index', compact('webinars', 'previews', 'lectures'));
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
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        Mail::send('emails.feedback', ['text' => $request->message], function ($m) use ($request) {
            $m->from($request->email, $request->name);
            $m->to('i.i.babko@gmail.com', 'Тина Васильева')->subject('Сообщение');
        });

        return response()->json(['notify' => 'Письмо отправлено успешно']);
    }

    public function profile(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'email' => 'email|unique:users,email,' . Auth::user()->id,
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

    public function paymentForLectures(Request $request)
    {
        $data = base64_decode($request->data);
        $dataObject = json_decode($data, true);

        Log::info($request);
        Log::info($data);
        Log::info($dataObject);
        Log::info('paid for lectures');

        User::where('email', $dataObject['description'])->update(['paidForLectures' => true]);
    }

    public function paymentForWebinars(Request $request)
    {
        $data = base64_decode($request->data);
        $dataObject = json_decode($data, true);

        Log::info($request);
        Log::info($data);
        Log::info($dataObject);
        Log::info('paid for webinars');

        User::where('email', $dataObject['description'])->update(['paidForWebinars' => true]);
    }

    public function webinarEmail(Request $request)
    {
        $data = base64_decode($request->data);
        $dataObject = json_decode($data, true);
        $email = $dataObject['description'];

        try {
            Mail::send('emails.webinar', [], function ($m) use ($email) {
                Log::info($email);
                $m->to($email)->subject('Подписка на вебинар');
            });
        } catch (\Exception $ex) {
            Log::info($ex);
        }
    }
}
