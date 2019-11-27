<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{

    protected $fillable=[
        'fname',
        'mname',
        'sname',
        'gender_id',
        'relationship_id',
        'age',
        'relationship_id',
        'field_id',
        'disability_id',
        'education_id',
        'employment_id',
        'occupation_id',
        'filename'
    ];
    
    /**
     * Get the household that owns the citizen.
     */
    public function household()
    {
        return $this->belongsTo('App\Household');
    }

    /**
    * The occupations that belong to the citizen.
    */
   public function occupations()
   {
       return $this->belongsToMany('App\Occupation');
   }
}
