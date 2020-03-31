<?php

namespace App\Http\Controllers\Api\export;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Cct2Export;

class Exportcct2 extends Controller
{
    public function exportcc2()
    {
        return Excel::download(new Cct2Export, 'cct2.xls');
    }

}
