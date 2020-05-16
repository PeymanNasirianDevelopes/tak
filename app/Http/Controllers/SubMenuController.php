<?php

namespace App\Http\Controllers;
use App\Button;
use App\Project;
use App\SubMenu;
use Illuminate\Http\Request;

class SubMenuController extends Controller
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

    public function show($id)
    {
        //
    }


    public function edit(SubMenu $submenu)
    {
        return view("admin.edit_submenus")->with(compact("submenu"));
    }


    public function update(Request $request, SubMenu $submenu)
    {
        $data=$request->validate([
            'title'=>'nullable',
            'image'=>'nullable',
            'text'=>'nullable',

        ]);
        $submenu_id=$request->id;

        if($photo=$request->image){
            $image=$request->file("image");
            $data['image']=do_upload($image);
        }
//        $btns=Button::upd($buttons_data,$submenu_id);
        $btns = Button::where('sub_menu_id', $submenu_id)
            ->update([
                'right_title'=> $request->right_title,
                'right_text' => $request->right_text,
                'right_btn' => $request->right_btn,
                'left_title' => $request->left_title,
                'left_text' => $request->left_text,
                'left_btn' => $request->left_btn,

            ]);

        if($photos_tobe_deleted=$request->photo_ids){

            foreach ($photos_tobe_deleted as $id){
                $photo_id=  Project::find($id);
                $photo_id->delete();


            }
        }

        $update=$submenu->update($data);
        if($update)
            return redirect("app/cms/admin/menus");
    }


    public function destroy($id)
    {
        //
    }
}
