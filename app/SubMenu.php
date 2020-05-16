<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    protected $guarded = ['id','link'];

    public function Projects(){
        return $this->hasMany(Project::class);
    }
    public function Buttons(){
        return $this->hasMany(Button::class);
    }


    public static function make($subtitle,$menu_id){
        $sub_title=new self;
        $sub_title->title=$subtitle;
        $sub_title->menu_id=$menu_id;
        $sub_title->save();
    }
}
