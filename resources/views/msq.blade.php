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
                                <h4>Test</h4><span>(1 of 20)</span></div>
                        </div>
                        <div class="question bg-white p-3 border-bottom">
                            <div class="d-flex flex-row align-items-center question-title">
                                <h3 class="text" style="color: #b247a7">Q.</h3>
                                <h5 class="mt-1 ml-2">Сниженное настроение</h5>
                            </div>
                            <div class="ans ml-2">
                                <label class="radio"> <input type="radio" name="first" value="Вовсе нет"> <span>Вовсе нет</span>
                                </label>
                            </div>
                            <div class="ans ml-2">
                                <label class="radio"> <input type="radio" name="first" value="Редко"> <span>Редко</span>
                                </label>
                            </div>
                            <div class="ans ml-2">
                                <label class="radio"> <input type="radio" name="first" value="Иногда"> <span>Иногда</span>
                                </label>
                            </div>
                            <div class="ans ml-2">
                                <label class="radio"> <input type="radio" name="first" value="Часто"> <span>Часто</span>
                                </label>
                            </div>
                            <div class="ans ml-2">
                                <label class="radio"> <input type="radio" name="first" value="Постоянно"> <span>Постоянно</span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white"><button class="btn btn-primary d-flex align-items-center btn-danger" type="button"><i class="fa fa-angle-left mt-1 mr-1"></i>&nbsp;previous</button><button class="btn btn-primary border-success align-items-center btn-success" type="button">Next<i class="fa fa-angle-right ml-2"></i></button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
