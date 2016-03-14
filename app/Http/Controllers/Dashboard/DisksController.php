<?php

namespace Multiversum\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Multiversum\Disk;
use Multiversum\Http\Controllers\Controller;
use Multiversum\Http\Requests\StoreDiskRequest;
use Multiversum\Http\Requests\UpdateDiskRequest;
use Session;

class DisksController extends Controller
{
    /**
     * Display a listing of the disks.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disks = Disk::orderBy('published_at', 'desc')->get();
        return view('dashboard.disks.index', compact('disks'));
    }

    /**
     * Show the form for creating a new disk.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.disks.create');
    }

    /**
     * Store a newly created disk in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, StoreDiskRequest $storeDiskRequest)
    {
        $disk = new Disk($request->except('file'));

        $disk->save();

        Session::flash('success', 'Диск добавлен успешно');

        return redirect('dashboard/disks');
    }

    /**
     * Display the specified disk.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified disk.
     *
     * @param  \Multiversum\Disk  $disk
     * @return \Illuminate\Http\Response
     */
    public function edit(Disk $disk)
    {
        return view('dashboard.disks.edit', compact('disk'));
    }

    /**
     * Update the specified disk in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Multiversum\Disk  $disk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disk $disk, UpdateDiskRequest $updateDiskRequest)
    {
        $disk->update(
            $request->except('_token', '_method')
        );

        Session::flash('success', 'Диск изменен успешно');

        return redirect('dashboard/disks');
    }

    /**
     * Remove the specified disk from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Disk::destroy($id);

        Session::flash('success', 'Диск успешно удален');

        return back();
    }
}
