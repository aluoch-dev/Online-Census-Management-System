<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Household extends Model
{
    /**
    * Get the citizens for the specified household.
    */
    public function citizens()
    {
        return $this->hasMany('App\Citizen');
    }


}
