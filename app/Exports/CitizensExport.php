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
        return Citizen::all();
    }
    
    public function headings(): array
    {
        return [
            'Code',
            'Description',
            'Pos',
            'Mod A',
            'Mod B',
            'Charge',
        ];
    }
}






   
