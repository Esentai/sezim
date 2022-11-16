@extends('layouts.app')

@section('content')
    <style>
        .content{
            display: none;
        }
    </style>
    <div class="container" id="into">
        <h2>ТЕСТ  <b> ЭМОЦИОНАЛЬНОГО САМОЧУВСТВИЯ</b></h2>
        <hr>
        <p>Тест поможет вам понять ваше эмоциональное состояние. <br>
            Тест не позволяет диагностировать, а также не дает медицинских оценок. <br>

            Чтобы получить соответствующие оценки, необходимо проконсультироваться с психиатром или клиническим психологом.

        </p>
        <h3>Количество прошедших тест: 0</h3>
        <button onclick="start()" href="#" class="btn btn-success">К ВОПРОСАМ</button>
    </div>
    <div class="container" id="content" style="display: none" >
        <h2>ТЕСТ  <b> ЭМОЦИОНАЛЬНОГО САМОЧУВСТВИЯ</b></h2>
        <hr>
        <p>Внимательно прочтите нижеприведённый перечень проблем и трудностей, которые могут иногда присутствовать у людей. Выберите вариант ответа, который лучше всего описывает то, насколько эта проблема беспокоила вас в течение последнего месяца.</p>
    </div>

    <script>
        function start(){
            console.log('Ok')
            document.getElementById("intro").style.display = "none"
            document.getElementById("content").style.display= "block"
        }
    </script>
@endsection
