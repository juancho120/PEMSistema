<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $guarded = [];

    public function person(){
        return $this->belongsTo('App\Person');
    }
}
