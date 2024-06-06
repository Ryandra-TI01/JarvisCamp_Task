<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Status;
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
        $statuses = Status::All();    
        $categories = Categories::All();    
        return view("task.create",[
            "statuses"=> $statuses,
            "categories"=> $categories,
        ]);
    }
    public function store(Request $request){
        $data = $request->validate([
            'nama'=>'required|max:100|min:3',
            'deadline'=>'required|date',
            // 'status'=> 'required|in:Belum Dikerjakan,Sedang Dikerjakan,Selesai',
            'description'=> 'required',
            'status_id'=>'nullable',
            'categories_id'=>'nullable',
        ]);
        Task::create($data);
        return redirect()->route('tasks.list');
    }

    public function edit(string $id){
        $task = Task::find($id);    
        $statuses = Status::All();    
        $categories = Categories::All();   
        return view('task.edit',compact('task'),[
            'statuses'=> $statuses,
            'categories'=> $categories
        ]);
    }
    public function update(Request $request, string $id){
        $data = $request->validate([
            'nama'=>'required|max:100|min:3',
            'deadline'=>'required|date',
            'description'=> 'required',
            'status_id'=>'nullable',
            'categories_id'=>'nullable',

        ]);
        $task = Task::find($id);
        $task->update($data);
        return redirect()->route('tasks.list');
    }
    public function delete(string $id){
        Task::find($id)->delete();
        return redirect()->route('tasks.list');
    }

    public function detail($id){
        $task = Task::All();
        $task_detail = collect($task)->firstWhere("id", $id);

        return view("task.detail",[
            'task_detail'=>$task_detail
        ]);
    }
}
