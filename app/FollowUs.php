<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FollowUs extends Model
{
   protected $guarded = ['id'];

   public static function make($follow,$id,$link){
       $fo= new self;
       $fo->font=$follow;
       $fo->contaact_id=$id;
       $fo->link=$link;
       $fo->save();

   }
}
