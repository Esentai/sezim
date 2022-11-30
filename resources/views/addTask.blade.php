@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>Add Task</h2>
        <form action="{{route('storeTask')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
            </div>
            <br>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="score">Score</label>
                <input type="text" class="form-control" name="score" id="score" placeholder="score" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
