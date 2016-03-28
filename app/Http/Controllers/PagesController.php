<?php

namespace Multiversum\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Multiversum\Book;
use Multiversum\Disk;
use Multiversum\Http\Controllers\Controller;
use Multiversum\Http\Requests\SendEmailRequest;
use Multiversum\Page;
use Multiversum\Post;
use Multiversum\Video;

class PagesController extends Controller
{
    public function index()
    {
        $videos = Video::orderBy('published_at', 'desc')->take(4)->get();
        $books  = Book::orderBy('published_at', 'desc')->take(4)->get();
        $disks  = Disk::orderBy('published_at', 'desc')->take(4)->get();
        $posts  = Post::orderBy('published_at', 'desc')->take(4)->get();

        return view('pages.index', compact('videos', 'books', 'disks', 'posts'));
    }

    public function about()
    {
        $page = Page::where('name', 'about')->first();

        return view('pages.about', compact('page'));
    }

    public function email()
    {
        return view('pages.email');
    }

    public function sendEmail(Request $request, SendEmailRequest $sendEmailRequest)
    {
        Mail::send('emails.contact', ['text' => $request->message], function ($m) use ($request) {
            $m->from($request->email, $request->name);
            $m->to('portaciya@gmail.com', 'Тина Васильева')->subject('Сообщение');
        });

        return back()->with('notify', 'Письмо отправлено успешно');
    }
}
