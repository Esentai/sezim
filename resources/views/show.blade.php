@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><a href="{{route('home')}}">Back</a></div>

                    <div class="card-body">
                       <h2>{{$article->title}}</h2>
                        <p>{{$article->description}}</p>
                        <form action="{{route('comment', $article->id)}}" method="post">
                            @csrf
                            <input style="opacity: 0" type="text" name="post_id" value="{{$article->id}}">
                            <input style="opacity: 0" type="text" name="user_id" value="{{Auth::user()->name}}">

                            <div class="form-group">
                                <label for="comment">Comment</label>
                                <textarea name="comment" id="description" class="form-control"></textarea>
                            </div>
                            <br>
                            <button class="btn btn-primary">Send</button>
                        </form>
                        <hr>
                        @foreach($comments as $comment)
                            @if($comment->post_id == $article->id)
                            <div>
                                {{$comment->user_id}}: {{$comment->comment}}
                            </div>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
