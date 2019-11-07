<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    /**
    * The citizens that belong to the occupation.
    */
   public function citizens()
   {
       return $this->belongsToMany('App\Citizen');
   }

}
