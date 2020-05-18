<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Features_task extends Model
{
    protected $guarded = ['id'];

    public static function make($image){
        $task=new self;
        $task->image=$image;
        $task->save();
    }
}
