<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public static function sliders(){
        return request()->validate([
            "title"=>"string | between:4,100 | required ",
            "content"=>"string | required ",
            "subscribe_text"=> "string | required ",
            "main_image"=>"image | mimes:jpg,jpeg,png,tiff | max:2000   ",
            "phone_image"=>"image | mimes:jpg,jpeg,png,tiff | max:2000   ",
            "show_input"=>"integer  | required ",
        ]);
    }

    public static function about_us(){
        return request()->validate([
            "head"=>"string | between:4,100  ",
            "head_text"=>"string  ",
            "btn_name"=>"string | between:3,100  ",
            "btn_link"=>"string | between:8,100  ",
            "sentences"=>"string | between:8,100 ",
            "image"=>"image | mimes:jpg,jpeg,png,tiff | max:2000   ",
            "text"=>"string    ",
        ]);
    }
    public static function projects(){
        return request()->validate([
            "title"=>"string | between:4,100  ",
            "date"=>"date | nullable  ",
            "content"=>"string   ",
            "sub_menu_id"=>"integer  ",
            "image"=>"image | mimes:jpg,jpeg,png,tiff | max:2000  ",

        ]);
    }

    public static function menu(){
        return request()->validate([
            "title"=>"string | between:4,100  ",
            "link"=>"string | nullable  ",
            "class"=>"string |nullable  ",

            "image"=>"image | mimes:jpg,jpeg,png,tiff | max:2000 | nullable ",

        ]);
    }
    public static function about(){
        return request()->validate([
            "title"=>"string | between:4,100  ",
            "content"=>"string | nullable  ",


            "bg_image"=>"image | mimes:jpg,jpeg,png,tiff | max:2000 | nullable ",

        ]);
    }



}
