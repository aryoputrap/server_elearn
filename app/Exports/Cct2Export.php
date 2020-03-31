<?php

namespace App\Exports;

use App\cct2;
use Maatwebsite\Excel\Concerns\FromCollection;

class Cct2Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return cct2::all();
    }
}
