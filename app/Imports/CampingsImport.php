<?php

namespace App\Imports;
use App\Models\Camping;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CampingsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Camping([
            'country'     => $row[0],
            'city'    => $row[1],
            'camping_name' => $row[2],
            'rating'    => $row[3],
            'number_of_reviews'    => $row[4],
            'website'    => $row[5],
        ]);
    }
}