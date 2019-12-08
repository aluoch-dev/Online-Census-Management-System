<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Household extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'state_id',
        'county_id', 
        'subcounty_id',
        'school_id',
        'cookingmeans_id',
        'structure_id',
        'disposal_id',
    ];  
    /**
     * The citizens that belong to the relationship.
     */
    public function citizens()
    {
        return $this->belongsToMany('App\Citizen');
    }

    /**
     * Get the user that owns the household.
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}
