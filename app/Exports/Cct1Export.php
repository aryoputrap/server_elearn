<?php

namespace App\Exports;

use App\cc1;
use Maatwebsite\Excel\Concerns\FromCollection;

class Cct1Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return cc1::all();
    }
}
