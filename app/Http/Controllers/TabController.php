<?php

namespace App\Http\Controllers;

use App\Font;
use App\Tab;
use Illuminate\Http\Request;

class TabController extends Controller
{

    public function index()
    {
        $tabs=Tab::all();
        return view("admin.tabs")->with(compact("tabs"));
    }


    public function create(Tab $tab)
    {

        $fonts=Font::first();
        return view("admin.tabs_edit")->with(compact("tab","fonts"));
    }


    public function store(Request $request)
    {
       $data=ValidationController::tabs();

        if($photo= $request->file('image')){
            $data['image']= do_upload($photo);
        }



        Tab::create($data);
        HelperController::flash();
        return redirect("app/cms/admin/tabs");

    }


    public function show(Tab $tab)
    {
        //
    }

    public function edit(Tab $tab)
    {
        $fonts=Font::first();
       return view("admin.tabs_edit")->with(compact("tab","fonts"));
    }


    public function update(Request $request, Tab $tab)
    {
       $data=ValidationController::tabs();
        if($photo= $request->file('image')){
            $data['image']= do_upload($photo);
        }
        $update=$tab->update($data);
        if($update){
            return redirect("app/cms/admin/tabs");
        }

    }


    public function destroy(Tab $tab)
    {
        $tab->delete();
        return redirect("app/cms/admin/tabs");
    }
}
