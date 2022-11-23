@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Questions</h2>
    <div>
        <ol>
            @foreach($questions as $question)
                <li>{{$question->name}}</li>
            @endforeach
        </ol>
    </div>
    <form action="{{route('questions.add')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Question ID</label>
            <input type="text" class="form-control" name="question_id" >
        </div>
        <br>
        <div class="form-group">
            <label for="title">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <br>
        <div class="form-group">
            <label for="title">1 Variant</label>
            <input type="text" value="Not at all" class="form-control" name="v1">
        </div>
        <br>
        <div class="form-group">
            <label for="title">2 Variant</label>
            <input type="text" value="Rarely" class="form-control" name="v2">
        </div>
        <br>
        <div class="form-group">
            <label for="title">3 Variant</label>
            <input type="text" value="Sometimes" class="form-control" name="v3">
        </div>
        <br>
        <div class="form-group">
            <label for="title">4 Variant</label>
            <input type="text" value="Often" class="form-control" name="v4">
        </div>
        <br>
        <div class="form-group">
            <label for="title">5 Variant</label>
            <input type="text" value="Constantly" class="form-control" name="v5">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
