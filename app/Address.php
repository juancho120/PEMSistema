<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $guarded = [];

    public function office(){
        return $this->belongsTo('App\office');
    }
    
}