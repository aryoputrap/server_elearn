<?php

namespace App\Http\Controllers\Api\export;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Cct3Export;

class Exportcct3 extends Controller
{
    public function exportcc3()
    {
        return Excel::download(new Cct3Export, 'cct3.xls');
    }

}
