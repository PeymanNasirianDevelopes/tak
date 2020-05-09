<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $guarded=['id'];

    public  function Tasks(){
        return $this->hasMany(Features_task::class);
    }
}
