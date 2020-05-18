<?php

namespace App\Http\Controllers;

use App\Feature;
use App\Font;
use Illuminate\Http\Request;

class FeatureController extends Controller
{

    public function index()
    {
        $feature=Feature::first();
        return view("admin.feature")->with(compact("feature"));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Feature $feature)
    {
        //
    }


    public function edit(Feature $feature)
    {
        $fonts=Font::first();
        return view("admin.feature_form")->with(compact("feature","fonts"));
    }

    public function update(Request $request, Feature $feature)
    {
        $data=ValidationController::features();
        if ($image=$request->main_image){

            $main_image= $request->file('main_image');


            $data['main_image']= do_upload($main_image);


        }
        if ($tasks=$request->task_title){
               $task_title=$request->task_title;
               $content=$request->task_title;

                AboutPhoto::make($image);


        }
        $update=$feature->update($data);
        if($update){
            return redirect("app/cms/admin/feature");
        }

    }


    public function destroy(Feature $feature)
    {
        //
    }
}
