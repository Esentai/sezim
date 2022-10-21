@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Article</h2>
        <form action="{{route('store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Title">
            </div>
            <br>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
