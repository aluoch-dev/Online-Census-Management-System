<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employmentstatus extends Model
{
    protected $table = 'employment_statuses';
    
    protected $guarded = []; 

    /**
     * The citizens that belong to the employmentstatus.
     */
    public function citizens()
    {
        return $this->belongsToMany('App\Citizen');
    }
}
