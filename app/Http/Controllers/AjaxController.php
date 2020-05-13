<?php

namespace App\Http\Controllers;


use App\slider;

class AjaxController extends Controller
{
    public function main($method){

        if(method_exists($this,$method)){
            $this->$method();
        }
        else{
            abort(404);
        }
    }


    public function mark_tasks(){

        $task= slider::find(request('task_id'));
        $task->show_input=!$task->show_input;
        $task->save();
    }
}
