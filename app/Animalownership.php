<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animalownership extends Model
{
    protected $table = 'animal_ownerships';
    
    protected $guarded = []; 

    /**
     * Get the animal record associated with the animalownership.
     */
    public function animal()
    {
        return $this->belongsTo('App\Animal', 'animal_id');
    }


}
