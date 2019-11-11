<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{

    /**
    * Get the subcounties for the county.
    */
   public function subcounties()
   {
       return $this->hasMany('App\Subcounty');
   }

    /**
     * Get the schools for the county.
     */
    public function schools()
    {
        return $this->belongTo('App\County');
    }

    /**
     * Get the citizens for the county.
     */
    public function citizens()
    {
        return $this->belongTo('App\Citizen');
    }

    /**
     * Get the households for the county.
     */
    public function households()
    {
        return $this->belongTo('App\Household');
    }
}
}
