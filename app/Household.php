<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Household extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = []; 

    /**
    * Get the citizens for the specified household.
    */
    public function citizens()
    {
        return $this->hasMany('App\Citizen');  
    }


}
