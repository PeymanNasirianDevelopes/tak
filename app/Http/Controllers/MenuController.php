<?php

namespace App\Http\Controllers;

use App\Menu;
use App\SubMenu;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function index()
    {
        $menus=Menu::all();
       return view("admin.menu")->with(compact("menus"));
    }


    public function create(Menu $menu)
    {
        return view("admin.menu_edit")->with(compact("menu"));
    }

    public function store(Request $request)
    {
        $data=ValidationController::menu();

        $photo= $request->file('main_image');

        $class=$request->submenu;
        if($class==1){
            $data['class']="x-megamenu";

        }
        else{
            $data['class']=NULL;
        }
        $data['image']= do_upload($photo);
        Menu::create($data);
        HelperController::flash();
        return redirect("app/cms/admin/menus");
    }


    public function show(Menu $menu)
    {
        //
    }

    public function edit(Menu $menu)
    {
        return view("admin.menu_edit")->with(compact("menu"));

    }

    public function update(Request $request, Menu $menu)
    {

        $menu_id= $request->id;

        $data=$request->validate([
            'title'=>'nullable',
            'image'=>'nullable',

        ]);

        if ($image=$request->image){

            $photo= $request->file('image');

            $data['image']= do_upload($photo);


        }
//        if ($subtitles=$request->sub_titles){
//            $ex=explode(" + ", "$subtitles");
//            foreach ($ex as $subtitle){
//
//                SubMenu::make($subtitle,$menu_id);
//
//            }
//        }
        if($submenu=$request->sub_menu){
            SubMenu::make($submenu,$menu_id);
        }
        if($photos_tobe_deleted=$request->photo_ids){

            foreach ($photos_tobe_deleted as $id){
                $photo_id=  SubMenu::find($id);
                $photo_id->delete();


            }
        }
        $update=$menu->update($data);

        if($update){




            return redirect("app/cms/admin/menus");

        }
        else{
            return back()->withMessage();
        }
    }


    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect("app/cms/admin/menus");
    }
}
