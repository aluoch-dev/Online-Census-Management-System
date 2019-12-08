<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disability extends Model
{
    //
    /**
     * The citizens that belong to the disability.
     */
    public function citizens()
    {
        return $this->belongsToMany('App\Citizen');
    }
}
