<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contaact extends Model
{
    protected $guarded=['id'];
    public function Follow(){
        return $this->hasMany(FollowUs::class);
    }
}
