<?php

namespace App\Http\Controllers;

use App\FeatureSection;
use App\Font;
use Illuminate\Http\Request;

class FeatureSectionController extends Controller
{

    public function index()
    {
        $features=FeatureSection::all();
        $feature_image=FeatureSection::first();
        $fonts=Font::first();
        return view("admin.feature_2")->with(compact("features","feature_image","fonts"));
    }


    public function create(FeatureSection $featureSection)
    {
        $fonts=Font::first();
        return view("admin.features2_form")->with(compact("featureSection","fonts"));
    }


    public function store(Request $request)
    {
        $data=ValidationController::feature2();
        if($main_image=$request->file("image")) {
            $photo = do_upload($main_image);
            $data['image']=$photo;
        }
        $data['content']=$request->bcontent;
        FeatureSection::create($data);
        HelperController::flash();
        return redirect("app/cms/admin/features_2");

    }


    public function show(FeatureSection $featureSection)
    {
        //
    }


    public function edit(FeatureSection $featureSection,$id)
    {
        $featureSection=FeatureSection::find($id);
        $fonts=Font::first();
        return view("admin.features2_form")->with(compact("featureSection","fonts"));
    }


    public function update(Request $request, FeatureSection $featureSection)
    {
        if($main_image=$request->file("main_image")){
            $photo=do_upload($main_image);

           $update_photo= FeatureSection::where('id', 1)
                ->update([

                    "main_image"=>$photo,

                ]);
           if($update_photo){
               return redirect("app/cms/admin/features_2");
           }
        }
        else{
            $id=$request->id;
            if ($image=$request->image){

                $bg_image= $request->file('image');
                $image= do_upload($bg_image);
                $feature_update = FeatureSection::where('id', $id)
                    ->update([
                        "title"=>$request->title,
                        "content"=>$request->bcontent,
                        "image"=>$image,
                        "font"=>$request->font,
                        "text"=>$request->text,

                    ]);

            }
            else{
                $feature_update = FeatureSection::where('id', $id)
                    ->update([
                        "title"=>$request->title,
                        "content"=>$request->bcontent,

                        "font"=>$request->font,
                        "text"=>$request->text,


                    ]);
            }

            if($feature_update){
                return redirect("app/cms/admin/features_2");
            }





        }


    }

    public function destroy(Request $request,FeatureSection $featureSection)
    {
        $id=$request->id;
        $d=FeatureSection::where('id',$id)->delete();
        if($d)
        return redirect("app/cms/admin/features_2");
    }
}
