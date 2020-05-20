<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{

    public function index()
    {
        $teams=Team::all();
        return view("admin.team")->with(compact("teams"));
    }


    public function create(Team $team)
    {
        return view("admin.team_form")->with(compact("team"));
    }


    public function store(Request $request)
    {
        $data=ValidationController::team();
        if($photo= $request->file('image')){
            $data['image']= do_upload($photo);
        }
       Team::create($data);
        return redirect("app/cms/admin/team");
    }


    public function show(Team $team)
    {
        //
    }


    public function edit(Team $team)
    {
        return view("admin.team_form")->with(compact("team"));
    }


    public function update(Request $request, Team $team)
    {
        $data=ValidationController::team();
        if($photo= $request->file('image')){
            $data['image']= do_upload($photo);
        }
        $team->update($data);
        return redirect("app/cms/admin/team");
    }

    public function destroy(Team $team)
    {
        $team->delete();
        return redirect("app/cms/admin/team");
    }
}
