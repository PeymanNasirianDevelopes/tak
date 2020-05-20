<?php

namespace App\Http\Controllers;

use App\Contaact;
use App\FollowUs;
use Illuminate\Http\Request;

class ContaactController extends Controller
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


    public function show(Contaact $contaact)
    {
        //
    }

    public function edit(Contaact $contaact)
    {
        $contaact=Contaact::first();
        return view("admin.contact_form")->with(compact("contaact"));
    }

    public function update(Request $request, Contaact $contaact)
    {
        $update=Contaact::where('id',1)->update([
                "title"=>$request->title,
                "phone"=>$request->phone,
                "mobile"=>$request->mobile,
                "address"=>$request->address,
                "website"=>$request->website,
                "about_us"=>$request->about_us,
                "follow_us"=>$request->follow_us,
                "head"=>$request->head,
                "link"=>$request->link,

            ]

        );
        if($follow=$request->follow){
            $id=$request->id;
            $link=$request->follow_link;
            FollowUs::make($follow,$id,$link);
        }

        if($photos_tobe_deleted=$request->photo_ids){

            foreach ($photos_tobe_deleted as $id){
                $photo_id=  FollowUs::find($id);
                $photo_id->delete();


            }
        }
        if($update){
            return redirect("app/cms/admin/contact/1/edit");
        }

    }

    public function destroy(Contaact $contaact)
    {
        //
    }
}
