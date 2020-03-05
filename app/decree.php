<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Decree extends Model
{
    protected $guarded = [];

    public function person(){
        return $this->hasMany('App\Person');
    }
}
