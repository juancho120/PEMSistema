<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $guarded = [];

    public function person(){
        return $this->hasMany('App\Person');
    }

    public function secretary(){
        return $this->belongsTo('App\secretary');
    }

    public function address(){
        return $this->hasOne('App\Address');
    }
}
