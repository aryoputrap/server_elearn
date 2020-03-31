<?php

namespace App\Exports;

use App\cct4;
use Maatwebsite\Excel\Concerns\FromCollection;

class Cct4Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return cct4::all();
    }
}
