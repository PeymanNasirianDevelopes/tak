<?php

namespace App\Http\Controllers;

use App\Landing;
use Illuminate\Http\Request;

class LandingController extends Controller
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


    public function show(Landing $landing)
    {
        //
    }

    public function edit(Landing $landing)
    {
        return view("admin.landing_form")->with(compact("landing"));
    }

    public function update(Request $request, Landing $landing)
    {
       $data=ValidationController::landing();
        if($photo= $request->file('image')){
            $data['image']= do_upload($photo);
        }
       $landing->update($data);
        return redirect("app/cms/admin/landing/1/edit");
    }


    public function destroy(Landing $landing)
    {
        //
    }
}
