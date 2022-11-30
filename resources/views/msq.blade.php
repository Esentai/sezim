@extends('layouts.app')

@section('content')
    <style>

        label.radio {
            cursor: pointer;
        }

        label.radio input {
            position: absolute;
            top: 0;
            left: 0;
            visibility: hidden;
            pointer-events: none;
        }

        label.radio span {
            padding: 4px 0px;
            border: 1px solid #b247a7;
            display: inline-block;
            color: #b247a7;
            width: 100px;
            text-align: center;
            border-radius: 3px;
            margin-top: 7px;
            text-transform: uppercase;
        }

        label.radio input:checked + span {
            border-color: #b247a7;
            background-color: #b247a7;
            color: #fff;
        }

        .ans {
            margin-left: 36px !important;
        }

        .btn:focus {
            outline: 0 !important;
            box-shadow: none !important;
        }

        .btn:active {
            outline: 0 !important;
            box-shadow: none !important;
        }
    </style>
    <div class="container" id="content">
        <h2>ТЕСТ  <b> ЭМОЦИОНАЛЬНОГО САМОЧУВСТВИЯ</b></h2>
        <hr>
        <p>Внимательно прочтите нижеприведённый перечень проблем и трудностей, которые могут иногда присутствовать у людей. Выберите вариант ответа, который лучше всего описывает то, насколько эта проблема беспокоила вас в течение последнего месяца.</p>
        <div class="mt-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-10 col-lg-10">
                    <div class="border">
                        <div class="question bg-white p-3 border-bottom">
                            <div class="d-flex flex-row justify-content-between align-items-center mcq">
                                <h4>Test</h4></div>
                        </div>
                        <form action="{{route('storeMsq')}}" method="post">
                            @csrf
                            @foreach($questions as $question)
                            <div class="question bg-white p-3 border-bottom">
                                <div class="d-flex flex-row align-items-center question-title">
                                    <h3 class="text" style="color: #b247a7">Q.</h3>
                                    <h5 class="mt-1 ml-2">{{$question->name}}</h5>
                                </div>
                                <div class="ans ml-2">
                                    <label class="radio"> <input type="radio" name="{{$question->question_id}}" value="0"> <span>{{$question->v1}}</span>
                                    </label>
                                </div>
                                <div class="ans ml-2">
                                    <label class="radio"> <input type="radio" name="{{$question->question_id}}" value="1"> <span>{{$question->v2}}</span>
                                    </label>
                                </div>
                                <div class="ans ml-2">
                                    <label class="radio"> <input type="radio" name="{{$question->question_id}}" value="2"> <span>{{$question->v3}}</span>
                                    </label>
                                </div>
                                <div class="ans ml-2">
                                    <label class="radio"> <input type="radio" name="{{$question->question_id}}" value="3"> <span>{{$question->v4}}</span>
                                    </label>
                                </div>
                                <div class="ans ml-2">
                                    <label class="radio"> <input type="radio" name="{{$question->question_id}}" value="4"> <span>{{$question->v5}}</span>
                                    </label>
                                </div>
                            </div>
                            @endforeach
                            <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white">
                                <button class="btn btn-primary border-success align-items-center btn-success" type="submit">
                                    Finish<i class="fa fa-angle-right ml-2"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
