<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Button extends Model
{
    protected $guarded= ['id'];

    public static function upd($data,$id){

        $button= new self();
        $button->update($data);

    }

}
