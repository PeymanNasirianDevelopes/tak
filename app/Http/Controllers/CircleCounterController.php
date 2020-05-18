<?php

namespace App\Http\Controllers;

use App\CircleCounter;
use Illuminate\Http\Request;

class CircleCounterController extends Controller
{

    public function index()
    {
        $circles=CircleCounter::all();
        return view("admin.circle_counter")->with(compact("circles"));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(CircleCounter $circleCounter)
    {
        //
    }


    public function edit(CircleCounter $circleCounter)
    {
        return view("admin.circle_edit")->with(compact("circleCounter"));
    }


    public function update(Request $request, CircleCounter $circleCounter)
    {
        $data=ValidationController::circle();
        $update=$circleCounter->update($data);
        if($update){
          return  redirect("app/cms/admin/circle_counter");
        }
    }

    public function destroy(CircleCounter $circleCounter)
    {
        //
    }
}
