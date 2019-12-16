<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cooking extends Model
{
    protected $table = 'amenities';
    
    protected $guarded = []; 

    /**
     * Get the households for the cooking means.
     */
    public function households()
    {
        return $this->belongTo('App\Household');
    }

}
