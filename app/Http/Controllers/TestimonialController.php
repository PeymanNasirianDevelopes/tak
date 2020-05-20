<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{

    public function index()
    {
        $testimonials=Testimonial::all();
        return view("admin.testimonials")->with(compact("testimonials"));
    }


    public function create(Testimonial $testimonial)
    {
        return view("admin.testimonial_form")->with(compact("testimonial"));
    }


    public function store(Request $request)
    {
        $data=ValidationController::testimonials();

        if($photo= $request->file('image')){
            $data['image']= do_upload($photo);
        }



        Testimonial::create($data);
        HelperController::flash();
        return redirect("app/cms/admin/testimonials");
    }


    public function show(Testimonial $testimonial)
    {
        //
    }


    public function edit(Testimonial $testimonial)
    {
        return view("admin.testimonial_form")->with(compact("testimonial"));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $data=ValidationController::testimonials();
        if($photo= $request->file('image')){
            $data['image']= do_upload($photo);
        }
        $update=$testimonial->update($data);
        if($update){
            return redirect("app/cms/admin/testimonials");
        }
    }


    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect("app/cms/admin/testimonials");

    }
}
