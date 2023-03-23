@extends('layouts.layouts')


@section('content')
    <div class="wrapper create-task">
        <h1>Create a new Task</h1>
        <form action="/tasks" method='POST'>
            @csrf
            <label for="name">Enter task name : </label>
            <input type="text" id='name' name='name'>
            <label for="priority">Select task priority </label>
         <select name="priority" id="priority">
            <option value="none">Select a priority</option>
            <option value="1">High priority</option>
            <option value="2">Middle priority</option>
            <option value="3">Low priority</option>
         </select>
         <input type="submit" value='Submit task'>
        </form>
    </div>

@endsection
 
 
        
