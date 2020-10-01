<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    protected $fillable = [
        'full_name', 'ic_number', 'dob', 'gender', 'race', 'religion', 'school',
    ];
   
    public function religion()
    {
        return $this->belongsTo('App\Religion');
    }

    public function race()
    {
        return $this->belongsTo('App\Race');
    }

    public function gender()
    {
        return $this->belongsTo('App\gender');
    }

    // public function getDobAttribute($value)
    // {
    //     return \Carbon\Carbon::parse($value)->format('d/m/Y');
    // }
    
}
