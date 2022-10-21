@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Articles</div>

                <div class="card-body">
                    <a class="btn btn-success" href="{{route('create')}}">Create new article</a>
                    <br>
                    <br>
                    @foreach($articles as $article)
                        <a style="text-decoration: none; color: #1C1C33" href="{{route('show', $article->id)}}">
                            <div style="border-bottom: 1px solid #ccc; padding: 15px 0 0 0" class="article">
                                <h3>{{$article->title}}</h3>
                                <p>{{$article->description}}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
