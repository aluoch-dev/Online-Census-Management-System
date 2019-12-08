<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incomesource extends Model
{
    protected $table = 'occupations';

    protected $guarded = []; 

    /**
     * The citizens that belong to the income source
     */
    public function citizens()
    {
        return $this->belongsToMany('App\Citizen');
    }
}
