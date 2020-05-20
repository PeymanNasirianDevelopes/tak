<?php

namespace App\Http\Controllers;

use App\Plan;
use App\PlansLi;
use Illuminate\Http\Request;

class PlanController extends Controller
{

    public function index()
    {
        $plans=Plan::all();
        return view("admin.plans")->with(compact("plans"));
    }


    public function create(Plan $plan)
    {
        return view("admin.plans_form")->with(compact("plan"));
    }


    public function store(Request $request)
    {
        $data=ValidationController::plans();
        Plan::create($data);
        HelperController::flash();
        return redirect("app/cms/admin/plans");
    }


    public function show(Plan $plan)
    {
        //
    }

    public function edit(Plan $plan)
    {
        return view("admin.plans_form")->with(compact("plan"));
    }


    public function update(Request $request, Plan $plan)
    {
        $data=ValidationController::plans();

        if($list=$request->list){
            $id=$request->id;
            PlansLi::make($list,$id);
        }

        if($photos_tobe_deleted=$request->photo_ids){

            foreach ($photos_tobe_deleted as $id){
                $photo_id=  PlansLi::find($id);
                $photo_id->delete();


            }
        }







        $plan->update($data);
        return redirect("app/cms/admin/plans");
    }


    public function destroy(Plan $plan)
    {
        $plan->delete();
        return redirect("app/cms/admin/plans");
    }
}
