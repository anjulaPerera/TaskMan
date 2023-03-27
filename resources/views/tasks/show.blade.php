@extends('layouts.app')




@section('content')

    <div class="wrapper task-details">
        <h1>{{$task->name}}</h1>
        <p class='priority'>Priority - {{$task->priority}}</p>
    </div>

    <a href="/tasks" class='back'><- Back to all tasks</a><br>

    

<form action="/tasks/{{$task->id}}" method='POST'>
    @csrf
    @method('DELETE')
        <button>Task Completed</button>
</form>

@endsection
 
 
        
