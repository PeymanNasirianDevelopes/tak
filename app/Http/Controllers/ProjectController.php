<?php

namespace App\Http\Controllers;

use App\Project;
use App\SubMenu;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __cunstruct(){
        $this->middleware('admin');
    }

    public function index()
    {
        $projects=Project::all();
       return view("admin.projects")->with(compact("projects"));
    }

    public function create(Project $project)
    {
            $sub_menus=SubMenu::all();
        return view("admin.projects_form")->with(compact("project","sub_menus"));
    }


    public function store(Request $request)
    {
        $data=ValidationController::projects();

        $photo= $request->file('image');


        $data['image']= do_upload($photo);
        Project::create($data);
        HelperController::flash();
        return redirect("app/cms/admin/projects");
    }


    public function show($id)
    {
        //
    }


    public function edit(Project $project)
    {
        $sub_menus=SubMenu::all();
        return view("admin.projects_form")->with(compact("project","sub_menus"));
    }


    public function update(Request $request, Project $project)
    {
        $data=ValidationController::projects();

        $photo= $request->file('image');
        if($photo){

            $data['image']= do_upload($photo);
        }


        $project->update($data);
        return redirect("app/cms/admin/projects");

    }

    public function destroy($id)
    {
        //
    }
}
