<?php

namespace App\Imports;

use App\Models\Song;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class SongsImport implements ToCollection
{
    /**
     * @param Collection $rows
     */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            Song::updateOrCreate([
                'artist'       => $row[1],
                'title'        => $row[2],
            ], [
                'url'          => $row[3],
                'published_at' => $row[4],
            ]);
        }

    }
}
