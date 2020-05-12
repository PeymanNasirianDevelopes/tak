<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contaact extends Model
{
    public function Follow(){
        return $this->hasMany(FollowUs::class);
    }
}
