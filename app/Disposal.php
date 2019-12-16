<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disposal extends Model
{
    protected $table = 'amenities';
    
    protected $guarded = []; 

    /**
     * Get the households for the disposal means.
     */
    public function households()
    {
        return $this->belongTo('App\Household');
    }
}
