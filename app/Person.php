<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded = [];

    public function study(){
        return $this->belongsTo('App\Study');
    }

    public function courses(){
        return $this->hasMany('App\Course');
    }
    
}
