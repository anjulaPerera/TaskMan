@extends('layouts.layouts')


@section('content')
    <h1>Your Task management Application</h1>
    <p class='msg'>{{ session('msg') }}</p>
    <a href="/tasks/create">Click here to add a new task</a>
    <br>
    <a href="/tasks"><button>See all tasks</button></a>


      @endsection
 