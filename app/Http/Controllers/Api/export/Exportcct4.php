<?php

namespace App\Http\Controllers\Api\export;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Cct4Export;

class Exportcct4 extends Controller
{
    public function exportcc4()
    {
        return Excel::download(new Cct4Export, 'cct4.xls');
    }
}
