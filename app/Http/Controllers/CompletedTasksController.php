<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\CompletedTasks;

class CompletedTasksController extends Controller
{
    public function index(){
        $tasks = CompletedTasks::orderBy('id')->get(); //ok without even asc, if need desc , it need
        // $tasks = Task::all();
        // $tasks = Task::where('priority',2)->get();
        // $tasks = Task::latest()->get(); //created_at thibunanam

    // $name = request('name');
    return view('completed_tasks.index', [
        'tasks' => $tasks,
        // 'name' => $name,
        // 'age' => request('age') //same as name
    ]);
    }

   


}