<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlansLi extends Model
{
    protected $guarded= ['id'];

    public static function make($list,$id){
        $li= new self;
        $li->head=$list;
        $li->plan_id=$id;
        $li->save();
    }


}
