<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    protected $guarded=[];

    /**
     * Get the households for the amenity.
     */
    public function households()
    {
        return $this->belongTo('App\Household', 'cookingmeans_id', 'structure_id','disposal_id');
    }
}
