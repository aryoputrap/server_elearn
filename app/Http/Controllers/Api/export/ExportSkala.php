<?php

namespace App\Http\Controllers\Api\export;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SkalaExport;

class ExportSkala extends Controller
{
    public function exportskala()
    {
        return Excel::download(new SkalaExport, 'skala.xls');
    }

}
