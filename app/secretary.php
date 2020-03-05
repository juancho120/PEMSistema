<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secretary extends Model
{
    protected $guarded = [];

    public function office(){
        return $this->hasMany('App\office');
    }
}
