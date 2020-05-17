<?php

namespace App\Http\Controllers;

use App\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{

    public function index()
    {
        $feature=Feature::first();
        return view("admin.feature")->with(compact("feature"));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Feature $feature)
    {
        //
    }


    public function edit(Feature $feature)
    {
        return view("admin.feature_form")->with(compact("feature"));
    }

    public function update(Request $request, Feature $feature)
    {
        //
    }


    public function destroy(Feature $feature)
    {
        //
    }
}
