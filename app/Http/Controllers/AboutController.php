<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {
        $abouts=About::all();
        return view("admin.about_us")->with(compact("abouts"));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show(About $about)
    {
        //
    }


    public function edit(About $about,$id)
    {
            $about=About::find($id);
        return view("admin.about_form")->with(compact("about"));
    }

    public function update(Request $request, About $about)
    {
        $id=$request->id;
        $data=array(
            "title"=>$request->title,
            "content"=>$request->bcontent,
            "bg_image"=>$request->bg_image,

        );
        if ($image=$request->bg_image){

            $bg_image= $request->file('bg_image');
             $image= do_upload($bg_image);
            $about_update = About::where('id', $id)
                ->update([
                    "title"=>$request->title,
                    "content"=>$request->bcontent,
                    "bg_image"=>$image,

                ]);

        }
        else{
            $about_update = About::where('id', $id)
                ->update([
                    "title"=>$request->title,
                    "content"=>$request->bcontent,


                ]);
        }

        if($about_update){
            return redirect("app/cms/admin/about_us");
        }
    }


    public function destroy(About $about)
    {
        //
    }
}
