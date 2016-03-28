<?php

namespace Multiversum\Http\Controllers;

use Illuminate\Http\Request;
use Multiversum\Http\Controllers\Controller;
use Multiversum\Video;

class VideosController extends Controller
{
    public function index()
    {
        $videos = Video::paginate(10);
        return view('videos.index', compact('videos'));
    }

    public function showVideo(Request $request, $slug)
    {
        $video = Video::whereSlug($slug)->firstOrFail();

        return view('videos.show', compact('request', 'video'));
    }

    public function search($searchString)
    {
        $videosBuilder = Video::search($searchString);
        $count         = $videosBuilder->get()->count();
        $videos        = $videosBuilder->paginate(10);

        return view('videos.index', compact('videos', 'searchString', 'count'));
    }
}
