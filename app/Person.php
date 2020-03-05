<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded = [];

    public function study(){
        return $this->belongsTo('App\Study');
    }

    public function workhour(){
        return $this->belongsTo('App\WorkHour');
    }

    public function office(){
        return $this->belongsTo('App\office');
    }

    public function director(){
        return $this->belongsTo('App\director');
    }

    public function decree(){
        return $this->belongsTo('App\decree');
    }
    
    public function courses(){
        return $this->hasMany('App\Course');
    }
    
    public function documentation(){
        return $this->hasMany('App\documentation');
    }

    public function ability(){
        return $this->hasMany('App\ability');
    }
    
    public function job(){
        return $this->hasMany('App\Job');
    }
}
