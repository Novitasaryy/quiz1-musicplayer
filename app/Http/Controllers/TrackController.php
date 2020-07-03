<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Track;
use App\Album;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $track['track'] = Track::all();
        return view('track.index')->with($track);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('track.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'track_name' => 'required'
        ],
        [
            'track_name.required' => 'Nama wajib diisi'
        ]);

        Track::create([
            'track_name' => $request->track_name,
            'album_id' => $request->album_id,
            'track_time' => $request->track_time,
            'track_file' => $request->track_file
        ]);

        return redirect('track');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Track::findOrFail($id);
        return view('track.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'track_name' => 'required'
        ],
        [
            'track_name.required' => 'Nama wajib diisi'
        ]);

        $row = Track::findOrFail($id);
        $row->update([
            'track_name' => $request->track_name,
            'album_id' => $request->album_id,
            'track_time' => $request->track_time,
            'track_file' => $request->track_file
        ]);

        return redirect('track');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Track::findOrFail($id);
        $row->delete();

        return redirect('track');
    }
}
