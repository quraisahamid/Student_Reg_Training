<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    
    const STATUS_PENDING = 1;
    const STATUS_ACCEPTED = 2;
    const STATUS_REJECTED = 3;


    protected $fillable = [
        'full_name', 'ic_number', 'dob', 'gender', 'race', 'religion', 'school',
    ];

    public function student()
    {
        return $this->belongsTo('App\Student');
    }

    public function school()
    {
        return $this->belongsTo('App\School');
    }

    public function status()
    {
        return $this->belongsTo('App\Status');
    }
}
