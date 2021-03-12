<?php

namespace App\Exports;

use App\Models\Camping;
use Maatwebsite\Excel\Concerns\FromCollection;

class CampingsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Camping::all();
    }
}
