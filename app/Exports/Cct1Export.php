<?php

namespace App\Exports;

use App\cct1;
use Maatwebsite\Excel\Concerns\FromCollection;

class Cct1Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return cct1::all();
    }
}
