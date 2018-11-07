<?php

namespace App\Http\Controllers;

use App\Imports\SongsImport;

class ImportSongsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        $path = request()->file('file')->storeAs('uploads', 'songs.xlsx');
        \Excel::import(new SongsImport, $path);

        return redirect()->route('songs.index')->with('success', 'All good!');
    }
}
