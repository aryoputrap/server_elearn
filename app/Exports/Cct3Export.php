<?php

namespace App\Exports;

use App\cct3;
use Maatwebsite\Excel\Concerns\FromCollection;

class Cct3Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return cct3::all();
    }
}
