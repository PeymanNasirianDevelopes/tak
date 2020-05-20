<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{

    public function index()
    {
        $video=Video::first();
        return view("admin.video")->with(compact("video"));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Video $video)
    {
        //
    }

    public function edit(Video $video)
    {
        return view("admin.video")->with(compact("video"));
    }


    public function update(Request $request, Video $video)
    {
        $data=ValidationController::video();

        if($photo= $request->file('bg_image')){
            $data['bg_image']= do_upload($photo);
        }
        $update=$video->update($data);
        if($update){
            return redirect("app/cms/admin/video/1/edit");
        }
    }


    public function destroy(Video $video)
    {
        //
    }
}
