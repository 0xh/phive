<?php

namespace App\Exports;

use App\Models\Song;
use Maatwebsite\Excel\Concerns\FromCollection;

class SongsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Song::all();
    }
}
