<?php

namespace Multiversum\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Multiversum\Book;
use Multiversum\Disk;
use Multiversum\Http\Controllers\Controller;
use Multiversum\Http\Requests\SendEmailRequest;
use Multiversum\Post;
use Multiversum\Webinar;

class PagesController extends Controller
{
    public function index()
    {
        $webinars = Webinar::orderBy('published_at', 'desc')->take(4)->get();
        $books    = Book::orderBy('published_at', 'desc')->take(4)->get();
        $disks    = Disk::orderBy('published_at', 'desc')->take(4)->get();
        $posts    = Post::orderBy('published_at', 'desc')->take(4)->get();

        return view('pages.index', compact('webinars', 'books', 'disks', 'posts'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function email()
    {
        return view('pages.email');
    }

    public function sendEmail(Request $request, SendEmailRequest $sendEmailRequest)
    {
        Mail::send('emails.contact', ['text' => $request->message], function ($m) {
            $m->to('i.i.babko@gmail.com', 'Игорь Бабко')->subject('Сообщение');
        });

        return back()->with('notify', 'Письмо отправлено успешно');
    }
}
