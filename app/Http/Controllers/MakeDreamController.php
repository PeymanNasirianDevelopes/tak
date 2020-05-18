<?php

namespace App\Http\Controllers;

use App\Font;
use App\MakeDream;
use Illuminate\Http\Request;

class MakeDreamController extends Controller
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


    public function show(MakeDream $makeDream)
    {
        //
    }


    public function edit(MakeDream $makeDream)
    {
        $fonts=Font::first();
        return view("admin.edit_make")->with(compact("makeDream","fonts"));
    }


    public function update(Request $request, MakeDream $makeDream)
    {
       $data=ValidationController::make();
       $update=$makeDream->update($data);
       if($update){
           return redirect("app/cms/admin/make_dream/1/edit");
       }

    }

    public function destroy(MakeDream $makeDream)
    {
        //
    }
}
