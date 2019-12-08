<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{    
    protected $guarded = []; 

    /**
     * The citizens that belong to the gender.
     */
    public function citizens()
    {
        return $this->belongsToMany('App\Citizen');
    }

}

