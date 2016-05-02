<?php

namespace Multiversum\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Mail;
use Multiversum\Book;
use Multiversum\Disk;
use Multiversum\Events\UserSubscribed;
use Multiversum\Http\Controllers\Controller;
use Multiversum\Http\Requests\SendEmailRequest;
use Multiversum\Http\Requests\SubscriptionRequest;
use Multiversum\Http\Requests\UpdateProfileRequest;
use Multiversum\Page;
use Multiversum\Post;
use Multiversum\Subscription;
use Multiversum\Video;

class PagesController extends Controller
{
    public function index()
    {
        $page = Page::where('name', 'главная')->first();

        $headerVideo = Video::first();

        $videos = Video::orderBy('published_at', 'desc')->take(4)->get();
        $books  = Book::orderBy('published_at', 'desc')->take(4)->get();
        $disks  = Disk::orderBy('published_at', 'desc')->take(4)->get();
        $posts  = Post::orderBy('published_at', 'desc')->take(4)->get();

        return view('pages.index', compact('page', 'headerVideo', 'videos', 'books', 'disks', 'posts'));
    }

    public function about()
    {
        $page = Page::where('name', 'обо мне')->first();

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

    public function search($searchString)
    {
        $videosBuilder = Video::search($searchString);
        $booksBuilder  = Book::search($searchString);
        $disksBuilder  = Disk::search($searchString);
        $postsBuilder  = Post::search($searchString);
        $count         = $videosBuilder->get()->count();
        $count         = $booksBuilder->get()->count() + $count;
        $count         = $disksBuilder->get()->count() + $count;
        $count         = $postsBuilder->get()->count() + $count;
        $videos        = $videosBuilder->get();
        $books         = $booksBuilder->get();
        $disks         = $disksBuilder->get();
        $posts         = $postsBuilder->get();

        return view('pages.search', compact('videos', 'books', 'disks', 'posts', 'searchString', 'count'));
    }

    public function showProfile()
    {
        $user = Auth::user();
        return view('pages.profile', compact('user'));
    }

    public function updateProfile(UpdateProfileRequest $request)
    {
        $user = Auth::user();

        $user->name  = $request->name;
        $user->email = $request->email;

        if (!empty($request->password)) {
            $user->password = $request->password;
        }

        $user->save();

        return back()->with('notify', 'Профиль успешно обновлен');
    }

    public function subscribe(SubscriptionRequest $request)
    {
        $email = $request->input('email');
        Subscription::create(['email' => $email]);
        event(new UserSubscribed($email));

        if ($request->ajax()) {
            return "Подписка оформлена успешно";
        }

        return back()->with('notify', 'Подписка оформлена успешно');
    }

    // public function unsubscribe()
    // {
    //     $email = $request->input('email');
    //     Subscription::where(['email', $email)->delete();
    //     event(new UserUnsubscribed($email));

    //     if ($request->ajax()) {
    //         return "Одписка оформлена успешно";
    //     }

    //     return back()->with('notify', 'Одписка оформлена успешно');
    // }
}
