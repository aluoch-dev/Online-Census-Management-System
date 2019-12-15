<?php

namespace App\Imports;

use App\Animalownership;
use App\User;
use App\Household;
use Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class AnimalsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Animalownership([
            'household_id' => \Auth::user()->household->id,
            'animal_id' => $row['animal_id'],
            'animal_count' => $row['animal_count'],
        ]);
    }
}
