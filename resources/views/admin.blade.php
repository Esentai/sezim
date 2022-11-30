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
                    <th>
                        @if($user->id != 7)
                            <form action="{{route('user.delete')}}" method="post">
                                @csrf
                                <input style="display: none" type="text" name="id" value="{{$user->id}}">
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        @endif
                    </th>
                </tr>
            @endforeach
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
                <th>
                    <form action="{{route('article.delete')}}" method="post">
                        @csrf
                        <input style="display: none" type="text" name="id" value="{{$article->id}}">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </th>
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
                <th>
                    <form action="{{route('task.delete')}}" method="post">
                        @csrf
                        <input style="display: none" type="text" name="id" value="{{$task->id}}">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </th>
            </tr>
        @endforeach
        <tr>
            <th colspan="4"> <a href="{{route('addTask')}}" class="btn btn-primary">Add Task</a></th>
        </tr>

        </tbody>
    </table>

    <br>
    <h3>Questions</h3>
    <table class="styled-table">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>1 variant</th>
            <th>2 variant</th>
            <th>3 variant</th>
            <th>4 variant</th>
            <th>5 variant</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($questions as $question)
            <tr>
                <th>{{$loop->index+1}}</th>
                <th>{{$question->name}}</th>
                <th>{{$question->v1}}</th>
                <th>{{$question->v2}}</th>
                <th>{{$question->v3}}</th>
                <th>{{$question->v4}}</th>
                <th>{{$question->v5}}</th>
                <th>
                    <form action="{{route('question.delete')}}" method="post">
                        @csrf
                        <input style="display: none" type="text" name="id" value="{{$question->id}}">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </th>
            </tr>
        @endforeach
        <tr>
            <th colspan="4"> <a href="{{route('questions')}}" class="btn btn-primary">Add Question</a></th>
        </tr>

        </tbody>
    </table>

</div>
@endsection
