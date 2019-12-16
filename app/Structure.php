<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Structure extends Model
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
