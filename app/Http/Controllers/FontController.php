<?php

namespace App\Http\Controllers;

use App\Font;
use Illuminate\Http\Request;

class FontController extends Controller
{

    public function index()
    {
        $fonts=Font::first();
        return view("admin.fonts")->with(compact("fonts"));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Font $font)
    {
        //
    }


    public function edit(Font $font)
    {
        //
    }


    public function update(Request $request, Font $font)
    {
        //
    }

    public function destroy(Font $font)
    {
        //
    }
}
