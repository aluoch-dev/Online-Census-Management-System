<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assetownership extends Model
{
    protected $table = 'asset_ownerships';
    
    protected $guarded = []; 
    /**
     * Get the asset record associated with the assetownership.
     */
    public function asset()
    {
        return $this->belongsTo('App\Asset', 'asset_id');
    }


}
