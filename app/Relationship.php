<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    
    protected $guarded = []; 

    /**
     * The citizens that belong to the relationship.
     */
    public function citizens()
    {
        return $this->belongsToMany('App\Citizen');
    }
}
