<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
   
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

        public function getDobAttribute($value)
        {
            
        }
    
}
