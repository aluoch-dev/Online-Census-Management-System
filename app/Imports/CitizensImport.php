<?php

namespace App\Imports;

use App\Citizen;
use App\User;
use App\Household;
use Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CitizensImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Citizen([
            'household_id' => \Auth::user()->household->id,
            'fname' => $row['fname'],
            'mname' => $row['mname'],
            'sname' => $row['sname'],
            'gender_id' => $row['gender_id'],
            'relationship_id' => $row['relationship_id'],
            'age' =>  $row['age'],
            'field_id' => $row['field_id'],
            'disability_id' => $row['disability_id'],
            'education_id' => $row['education_id'],
            'employment_id' => $row['employment_id'],
            'occupation_id' => $row['occupation_id'],
            'image' => $row['image'],
            
        ]);
    }
}
