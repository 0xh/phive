<?php

namespace App\Http\Controllers;

use App\Models\Song;

class SongsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::latest('published_at');

        if (request()->has('artist')) {
            $songs->where('artist', request('artist'));
        }

        return view('songs.index', ['songs' => $songs->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('songs.create', ['song' => new Song]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Song::create(request()->validate([
            'artist'       => ['required'],
            'title'        => ['required'],
            'url'          => ['required', 'max:255'],
            'published_at' => ['required', 'date'],
        ]));

        return redirect()->route('songs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Song $song
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        return view('songs.show', ['song' => $song]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Song $song
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        return view('songs.edit', ['song' => $song]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Song $song
     * @return \Illuminate\Http\Response
     */
    public function update(Song $song)
    {
        $song->update(request()->validate([
            'artist'       => ['required'],
            'title'        => ['required'],
            'url'          => ['required', 'max:255'],
            'published_at' => ['required', 'date'],
        ]));

        return redirect()->route('songs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Song $song
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Song $song)
    {
        $song->delete();

        return redirect()->route('songs.index');
    }
}
