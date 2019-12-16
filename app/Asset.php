<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $guarded=[];

     /**
     * Get the ownerships for the asset.
     */
    public function assetownerships()
    {
        return $this->belongTo('App\Assetownership');
    }
    
}
