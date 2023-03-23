@extends('layouts.app')



@section('content')
    
    <h1><b>Tasks</b></h1>
    <h2>All tasks</h2>


        @foreach($tasks as $task)
        <a href="/tasks/{{$task->id}}"><div class="taskslist">
            {{$task->name}} : Priority {{$task->priority}}
       </div></a>
        @endforeach
<br>

       
       <a href="/completed-tasks"><button>Completed Tasks</button></a><br><br>
       <a href="/home"><p>Home</p></a><br>

      @endsection
 
 
        
