<?php

namespace App\Exports;

use App\Citizen;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CitizensExport implements FromCollection, WithHeadings
{
   /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return Citizen::all();
    }
    
    public function headings(): array
    {
        return [
            '#',
            'First Name',
            'Middle Name',
            'Last Name',
            'Gender',
            'Age',
            'Relation',
            'Disability',
            'Education Level',
            'Field of Study',
            'Employment Status',
            'Occupation',
            'Income Source'
        ];
    }
}






   
