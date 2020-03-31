<?php

namespace App\Http\Controllers\Api\export;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Excel;
use App\Exports\Cct1Export;
use Maatwebsite\Excel\Facades\Excel;
// use App\Http\Resources\CCT\cc1resource;

class ExportController extends Controller
{

  public function exportexcel()
    {
        return Excel::download(new Cct1Export, 'cct1.xls');
    }


}
