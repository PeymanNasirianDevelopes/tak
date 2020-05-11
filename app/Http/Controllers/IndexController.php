<?php

namespace App\Http\Controllers;

use App\About;
use App\slider;
use App\Service;
use App\Feature;
use App\MakeDream;
use App\CircleCounter;
use App\Tab;
use DemeterChain\C;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function main()
    {
        $header= slider::first() ?? new slider;
        $services= Service::all() ?? new Service;
        $abouts=About::all() ?? new About;
        $feature=Feature::first() ?? new Feature;
        $make_dream=MakeDream::first() ?? new MakeDream;
        $circles=CircleCounter::all() ?? new CircleCounter;
        $tabs=Tab::all() ?? new Tab;

        return view("index")->with(compact('header','services','abouts', 'feature','make_dream','circles','tabs'));
    }
}
