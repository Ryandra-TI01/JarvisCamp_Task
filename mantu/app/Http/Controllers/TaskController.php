<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        // mendapat tugas dari model
        $task = Task::All();

        return view("task.index",[
            "tasks"=> $task
        ]);
    }

    public function list(){
        $task = Task::All();
        return view("task.list",[
            "tasks"=> $task
        ]);
    }

    public function create(){
        return view("task.create");
    }
    public function store(Request $request){
        $data = $request->validate([
            'nama'=>'required|max:100|min:3',
            'deadline'=>'required|date',
            'status'=> 'required|in:Belum Dikerjakan,Sedang Dikerjakan,Selesai',
            'descriptiom'=> 'required',
        ]);
        TASK::create($data);
        return redirect('tasks.list');
    }

    public function edit(string $id){
        $task = Task::find($id);    
        return view('tasks.edit');
    }

    public function detail($id){
        $task = Task::All();
        $task_detail = collect($task)->firstWhere("id", $id);

        return view("task.detail",[
            'task_detail'=>$task_detail
        ]);
    }
}
