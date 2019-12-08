<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{

    protected $fillable=[
        'fname',
        'mname',
        'sname',
        'gender_id',
        'age',
        'relationship_id',
        'field_id',
        'disability_id',
        'education_id',
        'employment_id',
        'occupation_id',
        'filename'
    ];
    
    /**
     * Get the household that owns the citizen.
     */
    public function household()
    {
        return $this->belongsTo('App\Household', 'household_id');
    }

    
   /**
     * Get the gender record associated with the user.
     */
   public function gender()
    {
        return $this->belongsTo('App\Gender');
    }

    /**
     * Get the studyfield record associated with the user.
     */
    public function studyfield()
    {
        return $this->belongsTo('App\Studyfield', 'field_id');
    }

    /**
     * Get the employment record associated with the user.
     */
    public function employmentstatus()
    {
        return $this->belongsTo('App\Employmentstatus', 'employment_id');
    }

    /**
     * Get the educationlevel record associated with the user.
     */
    public function educationlevel()
    {
        return $this->belongsTo('App\EducationLevel', 'education_id');
    }

    public function disability()
    {
        return $this->belongsTo('App\Disability');
    }

    public function relationship()
    {
        return $this->belongsTo('App\Relationship');
    }

    public function incomesource()
    {
        return $this->belongsTo('App\Incomesource', 'occupation_id');
    }

    /**
    * The occupations that belong to the citizen.
    */
   public function occupation()
   {
       return $this->belongsTo('App\Occupation');
   }

}
