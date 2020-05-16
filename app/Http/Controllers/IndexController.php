<?php

namespace App\Http\Controllers;

use App\About;
use App\slider;
use App\Service;
use App\Feature;
use App\MakeDream;
use App\CircleCounter;
use App\FeatureSection;
use App\Video;
use App\Plan;
use App\Tab;
use App\Landing;
use App\Client;
use App\Contaact;
use App\Footer;
use App\Menu;

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
        $feature_section_image=FeatureSection::first() ?? new FeatureSection;
        $feature_sections=FeatureSection::all() ?? new FeatureSection;
        $video=Video::first() ?? new Video;
        $plans=Plan::all() ?? new Plan;
        $clients=Client::all() ?? new Client;
        $landing=Landing::first() ?? new Landing;
        $contact=Contaact::first() ?? new Contaact;
        $footers=Footer::all() ?? new Footer;
        $menus=Menu::all()->where("class","x-megamenu") ?? new Menu;
        $menu_dives=Menu::all()->where("class",NULL) ?? new Menu;


        $tabs=Tab::all() ?? new Tab;

        return view("index")->with(compact('header','services','abouts', 'feature','make_dream','circles','tabs','feature_section_image','feature_sections','video','plans'
        ,'clients','landing','contact','footers','menus','menu_dives'));



    }
}
