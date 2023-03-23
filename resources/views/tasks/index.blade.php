@extends('layouts.layouts')


@section('content')
    
    <h1><b>Tasks</b></h1>
    <h2>All tasks</h2>


        @foreach($tasks as $task)
        <div class="taskslist">
            {{$task->name}} - {{$task->priority}}
       </div>

        @endforeach

      @endsection
 
 
        
