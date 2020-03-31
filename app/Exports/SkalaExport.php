<?php

namespace App\Exports;

use App\skalasikap;
use Maatwebsite\Excel\Concerns\FromCollection;

class SkalaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return skalasikap::all();
    }
}
