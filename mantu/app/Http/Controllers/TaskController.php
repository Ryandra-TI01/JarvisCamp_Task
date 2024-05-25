<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        // mendapat tugas dari model
        $task = Task::getAll();

        return view("task.index",[
            "tasks"=> $task
        ]);
    }

    public function detail($id){
        $task = Task::getAll();
        $task_detail = collect($task)->firstWhere("id", $id);

        return view("task.detail",[
            'task_detail'=>$task_detail
        ]);
    }
}
