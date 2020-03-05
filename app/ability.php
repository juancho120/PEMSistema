<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    protected $guarded = [];

    public function person(){
        return $this->belongsTo('App\Person');
    }
}
