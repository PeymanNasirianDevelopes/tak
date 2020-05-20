<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $guarded = ['id'];

    public  function Lists(){
        return $this->hasMany(PlansLi::class);
    }
}
