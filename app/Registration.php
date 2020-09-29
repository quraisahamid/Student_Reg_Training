<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    //
    public function student()
    {
        return $this->belongsTo('App\Student');
    }

    public function school()
    {
        return $this->belongsTo('App\School');
    }
}
