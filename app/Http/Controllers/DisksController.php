<?php

namespace Multiversum\Http\Controllers;

use Illuminate\Http\Request;
use Multiversum\Disk;

class DisksController extends Controller
{
    public function index()
    {
        $disks = Disk::orderBy('published_at', 'desc')
            ->paginate(config('custom.posts_per_page'));

        return view('disks.index')->withDisks($disks);
    }

    public function showDisk(Request $request, $slug)
    {
        $disk = Disk::whereSlug($slug)->firstOrFail();

        return view('disks.show', compact('request', 'disk'));
    }
}
