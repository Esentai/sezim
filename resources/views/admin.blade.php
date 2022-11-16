@extends('layouts.app')

@section('content')
<style>
    .styled-table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: sans-serif;
        width: 80%;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }
    .styled-table thead tr {
        background-color: #B247A7;
        color: #ffffff;
        text-align: left;
    }
    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
    }
    .styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #B247A7;
    }
</style>
<div class="container">
    <h3>Users</h3>
    <table class="styled-table">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <th>{{$loop->index+1}}</th>
                    <th>{{$user->name}}</th>
                    <th>{{$user->email}}</th>
                    <th><a href="#">Edit</a> <a href="#">Delete</a> </th>
                </tr>
            @endforeach
        <tr>
           <th colspan="4"> <button class="btn btn-primary">Add User</button></th>
        </tr>
        </tbody>
    </table>
    <br>
    <h3>Articles</h3>
    <table class="styled-table">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <th>{{$loop->index+1}}</th>
                <th>{{$article->title}}</th>
                <th>{{$article->description}}</th>
                <th><a href="#">Edit</a> <a href="#">Delete</a> </th>
            </tr>
        @endforeach
            <tr>
                <th colspan="4"> <a href="{{route('create')}}" class="btn btn-primary">Add Article</a></th>
            </tr>
        </tbody>
    </table>
    <br>
    <h3>Tasks</h3>
    <table class="styled-table">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
            <tr>
                <th>{{$loop->index+1}}</th>
                <th>{{$task->title}}</th>
                <th>{{$task->description}}</th>
                <th><a href="#">Edit</a> <a href="#">Delete</a> </th>
            </tr>
        @endforeach
        <tr>
            <th colspan="4"> <a href="{{route('addTask')}}" class="btn btn-primary">Add Task</a></th>
        </tr>
        </tbody>
    </table>
</div>
@endsection
