<?php

namespace App\Http\Controllers;

use App\song;
use Illuminate\Http\Request;
use DataTables;

class SongController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index()
	{
		return view('pages/song');
	}

	public function list()
	{
		return DataTables::of(Song::query())->make(true);
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $song = new Song;
	   $song->title = $request->title;
	   $song->artist = $request->artist;
	   $song->lyrics = $request->lyrics;
	   if ($song->save()) {
	   	return redirect()->route('song');
	   }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\song  $song
     * @return \Illuminate\Http\Response
     */
    public function show(song $song)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\song  $song
     * @return \Illuminate\Http\Response
     */
    public function edit(song $song)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\song  $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, song $song)
    {
	    $flight = Song::find($song);
 	   $song->title = $request->title;
 	   $song->artist = $request->artist;
 	   $song->lyrics = $request->lyrics;
 	   if ($song->save()) {
 	   	return redirect()->route('song');
 	   }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\song  $song
     * @return \Illuminate\Http\Response
     */
    public function destroy(song $song)
    {
        //
    }
}
