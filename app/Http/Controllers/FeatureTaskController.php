<?php

namespace App\Http\Controllers;

use App\Features_task;
use App\Font;
use Illuminate\Http\Request;

class FeatureTaskController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Features_task $features_task)
    {
        //
    }

    public function edit(Features_task $features_task,$id)
    {
        $fonts=Font::first();

        $features_task=Features_task::find($id);
       return view("admin.featuretask_edit")->with(compact("features_task","fonts"));
    }


    public function update(Request $request, Features_task $features_task)
    {
       $id=$request->id;
        $task = Features_task::where('id', $id)
            ->update([
                "title"=>$request->title,
                "content"=>$request->bcontent,
                "font"=>$request->font,

            ]);
        if($task){
            return redirect("app/cms/admin/feature/1/edit");
        }
    }

    public function destroy($id)
    {

    }
}
