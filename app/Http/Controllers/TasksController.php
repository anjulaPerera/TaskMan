<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    public function index(){
         
       
        $tasks = Task::orderBy('id')->get(); //ok without even asc, if need desc , it need
        // $tasks = Task::all();
        // $tasks = Task::where('priority',2)->get();
        // $tasks = Task::latest()->get(); //created_at thibunanam

    // $name = request('name');
    return view('tasks.index', [
        'tasks' => $tasks,
        // 'name' => $name,
        // 'age' => request('age') //same as name
    ]);
    }

    public function show($id){

        $task = Task::findOrFail($id);

         return view('tasks.show', ['task'=>$task]);
    }

    public function create(){
        return view('tasks.create');
    }

    public function store(){
        // error_log(request('name'));
        // error_log(request('priority'));

        $new_task = new Task();

        $new_task->name = request('name');
        $new_task->priority = request('priority');

        $new_task->save();

        return redirect('/')->with('msg','New task added successfully');
    }

        public function destroy($id){
       $completed_task = Task::findOrFail($id);
       $completed_task->delete();


        return redirect('/tasks');
}



}