<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkHour extends Model
{
    protected $guarded = [];

    public function person(){
        return $this->hasMany('App\Person');
    }
}
