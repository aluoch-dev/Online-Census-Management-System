<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    
    protected $guarded = []; 

    /**
     * Get the ownerships for the animal.
     */
    public function animalownerships()
    {
        return $this->belongTo('App\Animalownership');
    }
    
}
