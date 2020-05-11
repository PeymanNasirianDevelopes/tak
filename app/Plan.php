<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{

    public  function Lists(){
        return $this->hasMany(PlansLi::class);
    }
}
