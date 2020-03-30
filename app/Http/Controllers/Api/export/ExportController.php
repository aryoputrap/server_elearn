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
  // public function exportexcel()
  // {
  //       $export = cc1::select('kelas','nik','nama','tier11','tier12','tier13','tier13_e','tier14','tier21','tier31','tier32','tier33','tier33_e','tier34','tier41','tier42','tier43','tier44','tier51','tier52','tier53','tier61','tier71','tier72','tier73','tier73_e','tier74')->get();
  //       return Excel::create('data_cc1', function($excel) use ($export){
  //           $excel->sheet('mysheet', function($sheet) use ($export){
  //               $sheet->fromArray($export);
  //           });
  //       })->download('xls');
  // }

  public function exportexcel()
    {
        // $cc1ex = cc1::all();
        return Excel::download(new Cct1Export, 'cct1.xls');
    }


}
