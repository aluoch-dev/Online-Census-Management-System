<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcounty extends Model
{

    /**
     * Get the county that owns the subcounty.
     */
    public function county()
    {
        return $this->belongsTo('App\County');
    }
    
    /**
     * Get the schools for the subcounty.
     */
    public function schools()
    {
        return $this->belongTo('App\School');
    }

    /**
     * Get the citizens for the subcounty.
     */
    public function citizens()
    {
        return $this->belongTo('App\Citizen');
    }

    /**
     * Get the schools for the subcounty.
     */
    public function households()
    {
        return $this->belongTo('App\Household');
    }
}
