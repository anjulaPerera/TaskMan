@extends('layouts.app')



@section('content')
    
 
    <h2>All completed tasks</h2>


        @foreach($tasks as $task)
        <div class="completedtaskslist">
            {{$task->name}} : Priority {{$task->priority}}
       </div>
        @endforeach
<br>

       <a href="/home"><p>Home</p></a>

      @endsection
 
 
        
