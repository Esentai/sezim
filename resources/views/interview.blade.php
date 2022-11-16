@extends('layouts.app')

@section('content')

    <div class="container" id="into">
        <h2>ТЕСТ  <b> ЭМОЦИОНАЛЬНОГО САМОЧУВСТВИЯ</b></h2>
        <hr>
        <p>Тест поможет вам понять ваше эмоциональное состояние. <br>
            Тест не позволяет диагностировать, а также не дает медицинских оценок. <br>

            Чтобы получить соответствующие оценки, необходимо проконсультироваться с психиатром или клиническим психологом.

        </p>
        <h3>Количество прошедших тест: 0</h3>
        <a href="{{route('interview.msq')}}" class="btn btn-success">К ВОПРОСАМ</a>
    </div>

@endsection
