<?php

namespace App\Http\Controllers;

use App\Exports\SongsExport;

class ExportSongsController extends Controller
{
    /**
     * @return \Maatwebsite\Excel\BinaryFileResponse
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     * @throws \PhpOffice\PhpSpreadsheet\Writer\Exception
     */
    public function index()
    {
        return \Excel::download(new SongsExport, 'songs.xlsx');
    }
}
