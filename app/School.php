<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    /**
     * Get the county that owns the school.
     */
    public function county()
    {
        return $this->belongsTo('App\County');
    }

    /**
     * Get the subcounty that owns the school.
     */
    public function subcounty()
    {
        return $this->belongsTo('App\Subcounty');
    }
}
