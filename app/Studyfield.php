<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studyfield extends Model
{
    protected $table = 'study_fields';
    
    protected $guarded = [];  

    /**
     * The citizens that belong to the studyfield.
     */
    public function citizens()
    {
        return $this->belongsToMany('App\Citizen'); 
    }
}
