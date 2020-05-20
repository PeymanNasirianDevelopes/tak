<?php

namespace App\Http\Controllers;

use App\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
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


    public function show(Logo $logo)
    {
        //
    }


    public function edit(Logo $logo)
    {
        return view("admin.logo")->with(compact("logo"));
    }


    public function update(Request $request, Logo $logo)
    {
        $data=ValidationController::logo();

        $main_logo= $request->file('main_logo');

        $header_logo= $request->file('header_logo');
        $footer_image= $request->file('footer_image');
        if($main_logo){

            $data['main_logo']= do_upload($main_logo);
        }
        if($header_logo){

            $data['header_logo']= do_upload($header_logo);
        }
        if($footer_image){

            $data['footer_image']= do_upload($footer_image);
        }


        $logo->update($data);
        return redirect("app/cms/admin/logo/1/edit");
    }

    public function destroy(Logo $logo)
    {
        //
    }
}
