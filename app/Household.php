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
    
    /**
     * Get the state record associated with the household.
     */
    public function state()
    {
        return $this->belongsTo('App\State', 'state_id');
    }

    /**
     * Get the county record associated with the household.
     */
    public function county()
    {
        return $this->belongsTo('App\County', 'county_id');
    }

    /**
     * Get the subcounty record associated with the household.
     */
    public function subcounty()
    {
        return $this->belongsTo('App\Subcounty', 'subcounty_id');
    }

    /**
     * Get the school record associated with the household.
     */
    public function school()
    {
        return $this->belongsTo('App\School', 'school_id');
    }

    /**
     * Get the amenity record associated with the household.
     */
    public function amenity()
    {
        return $this->belongsTo('App\Amenity', 'disposal_id' );
    }

    /**
     * Get the cookingmeans record associated with the household.
     */
    public function cooking()
    {
        return $this->belongsTo('App\Cooking', 'cookingmeans_id' );
    }

     /**
     * Get the housestructure record associated with the household.
     */
    public function structure()
    {
        return $this->belongsTo('App\Structure', 'structure_id' );
    }

    /**
     * Get the disposal record associated with the household.
     */
    public function disposal()
    {
        return $this->belongsTo('App\Disposal', 'disposal_id');
    }
}
