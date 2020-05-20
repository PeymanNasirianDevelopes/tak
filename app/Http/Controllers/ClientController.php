<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index()
    {
        $clients=Client::all();
        return view("admin.clients")->with(compact("clients"));
    }


    public function create(Client $client)
    {
        return view("admin.clients_form")->with(compact("client"));
    }


    public function store(Request $request)
    {
        $data=ValidationController::clients();
        if($photo= $request->file('image')){
            $data['image']= do_upload($photo);
        }
        $create=Client::create($data);
        if($create){
            HelperController::flash();
            return redirect("app/cms/admin/clients");
        }
    }


    public function show(Client $client)
    {
        //
    }


    public function edit(Client $client)
    {
        return view("admin.clients_form")->with(compact("client"));
    }


    public function update(Request $request, Client $client)
    {
       $data=ValidationController::clients();
        if($photo= $request->file('image')){
            $data['image']= do_upload($photo);
        }
        $update=$client->update($data);
        if($update){
            return redirect("app/cms/admin/clients");
        }
    }


    public function destroy(Client $client)
    {
        $client->delete();
        return redirect("app/cms/admin/clients");
    }
}
