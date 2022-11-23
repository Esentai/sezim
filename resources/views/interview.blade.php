@extends('layouts.app')

@section('content')

    <div class="container" id="into">
        <h2>ТЕСТ  <b> ЭМОЦИОНАЛЬНОГО САМОЧУВСТВИЯ</b></h2>
        <hr>
        <p>Тест поможет вам понять ваше эмоциональное состояние. <br>
            Тест не позволяет диагностировать, а также не дает медицинских оценок. <br>

            Чтобы получить соответствующие оценки, необходимо проконсультироваться с психиатром или клиническим психологом.

        </p>
        <h3>Количество прошедших тест: {{$count}}</h3>
        <a href="{{route('interview.msq')}}" class="btn btn-success">К ВОПРОСАМ</a>
        @foreach($all as $item)
            @if($item->user_id == Auth::user()->id)
                <div style="border: 1px solid #000; padding: 20px; margin-top: 30px">
                    <h2>Your Score: {{$item->score}}</h2>
                    <p>If you scored more than 11 points, then this may indicate depression. In the case of depression, a person usually suffers from low mood, loss of interest and cheerfulness, decreased energy, which in turn leads to increased fatigue and decreased activity. Also, people may experience a decrease in attention and ability to concentrate, sleep disturbance and a change in appetite. You can also experience feelings of guilt and inferiority, low self-esteem and self-confidence; a person may show pessimism and hopelessness about the future, the will to live may decrease.
                        If you're thinking about dying, check out the quick help contacts and be sure to get in touch with one so you don't end up alone!</p>
                </div>
            @endif
        @endforeach
    </div>

@endsection
