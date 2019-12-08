<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationLevel extends Model
{
    protected $table = 'education_levels';
    
    protected $guarded = []; 

    /**
     * The citizens that belong to the education_level.
     */
    public function citizens()
    {
        return $this->belongsToMany('App\Citizen');
    }
}
