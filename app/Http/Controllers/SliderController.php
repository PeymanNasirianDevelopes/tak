<?php

namespace App\Http\Controllers;

use App\slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function __cunstruct(){
        $this->middleware('admin');
    }

    public function index()
    {
        $slider= slider::first();
        return view('admin.slider')->with(compact('slider'));
    }




    public function edit(slider $slider)
    {
        return view("admin.slider_form")->with(compact("slider"));
    }


    public function update(Request $request, slider $slider)
    {
        $data=ValidationController::sliders();
        if ($image=$request->main_image || $phone=$request->phone_image){

            $main_image= $request->file('main_image');
            $mobile_photo=$request->file('phone_image');

            $data['main_image']= do_upload($main_image);
            $data['phone_image']= do_upload($mobile_photo);



        }

        $update=$slider->update($data);





            return redirect("app/cms/admin/sliders");


    }


}
