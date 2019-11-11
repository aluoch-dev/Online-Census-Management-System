<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
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
