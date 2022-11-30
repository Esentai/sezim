@extends('layouts.app')

@section('content')
    <style>

        .card {
            box-shadow: 0 0.46875rem 2.1875rem rgba(4, 9, 20, 0.03), 0 0.9375rem 1.40625rem rgba(4, 9, 20, 0.03), 0 0.25rem 0.53125rem rgba(4, 9, 20, 0.05), 0 0.125rem 0.1875rem rgba(4, 9, 20, 0.03);
            border-width: 0;
            transition: all .2s;
        }

        .card-header:first-child {
            border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
        }

        .card-header {
            display: flex;
            align-items: center;
            border-bottom-width: 1px;
            padding-top: 0;
            padding-bottom: 0;
            padding-right: 0.625rem;
            height: 3.5rem;
            background-color: #fff;
        }
        .widget-subheading{
            color: #858a8e;
            font-size: 10px;
        }
        .card-header.card-header-tab .card-header-title {
            display: flex;
            align-items: center;
            white-space: nowrap;
        }

        .card-header .header-icon {
            font-size: 1.65rem;
            margin-right: 0.625rem;
        }

        .card-header.card-header-tab .card-header-title {
            display: flex;
            align-items: center;
            white-space: nowrap;
        }

        .btn-actions-pane-right {
            margin-left: auto;
            white-space: nowrap;
        }

        .text-capitalize {
            text-transform: capitalize !important;
        }

        .scroll-area-sm {
            height: 288px;
            overflow-x: hidden;
        }

        .list-group-item {
            position: relative;
            display: block;
            padding: 0.75rem 1.25rem;
            margin-bottom: -1px;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.125);
        }

        .list-group {
            display: flex;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
        }

        .todo-indicator {
            position: absolute;
            width: 4px;
            height: 60%;
            border-radius: 0.3rem;
            left: 0.625rem;
            top: 20%;
            opacity: .6;
            transition: opacity .2s;
        }

        .bg-warning {
            background-color: #f7b924 !important;
        }

        .widget-content {
            padding: 1rem;
            flex-direction: row;
            align-items: center;
        }

        .widget-content .widget-content-wrapper {
            display: flex;
            flex: 1;
            position: relative;
            align-items: center;
        }

        .widget-content .widget-content-right.widget-content-actions {
            visibility: hidden;
            opacity: 0;
            transition: opacity .2s;
        }

        .widget-content .widget-content-right {
            margin-left: auto;
        }

        .btn:not(:disabled):not(.disabled) {
            cursor: pointer;
        }

        .btn {
            position: relative;
            transition: color 0.15s, background-color 0.15s, border-color 0.15s, box-shadow 0.15s;
        }

        .btn-outline-success {
            color: #3ac47d;
            border-color: #3ac47d;
        }

        .btn-outline-success:hover {
            color: #fff;
            background-color: #3ac47d;
            border-color: #3ac47d;
        }

        .btn-outline-success:hover {
            color: #fff;
            background-color: #3ac47d;
            border-color: #3ac47d;
        }
        .btn-primary {
            color: #fff;
            background-color: #3f6ad8;
            border-color: #3f6ad8;
        }
        .btn {
            position: relative;
            transition: color 0.15s, background-color 0.15s, border-color 0.15s, box-shadow 0.15s;
            outline: none !important;
        }

        .card-footer{
            background-color: #fff;
        }
        .task{
            padding: 15px 30px;
            border-bottom: 1px solid #ccc;
        }
        .item:hover{
            background-color: rgba(0,0,0,0.1);
        }
        .tasks_container{
            display: flex;
        }
        .indi{
            width: 15px !important;
        }
        #scales{
            margin: 0 15px;
        }
        table{
            width: 100%;
            margin-top: 30px;
            background-color: #fff;
        }
        th,td{
            border: 1px solid #000;
            padding: 15px;
        }
        th{
            font-weight: bold;
        }
        table button {
            margin: 10px;
        }
    </style>
    <h1>My Tasks</h1>
    <div class="row d-flex justify-content-center container" >
        <div class="col-md-12">
            <div class="card-hover-shadow-2x mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i
                            class="fa fa-tasks"></i>My Tasks</div>

                </div>
                <div class="">
                        <div  class="ps ps--active-y">
                            <div class="ps-content">
                                @foreach($myTasks as $myTask)
                                    @foreach($tasks as $task)
                                        @if($myTask->status == "Accept" && $myTask->task_id == $task->id )
                                            <div class="tasks_container item">
                                                <div class="indi bg-success"></div>
        {{--                                        <input type="checkbox" id="scales" name="scales">--}}

                                                <div class="task">
                                                    <h4>{{$task->title}}</h4>
                                                    <p>{{$task->description}}</p>

                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                        </div>

                </div>
{{--                <div class="d-block text-right card-footer"><a href="{{route('addTask')}}"--}}
{{--                        class="btn btn-primary">Add Task</a></div>--}}
            </div>
        </div>
    </div>
    <br>
    <h1>Recommended tasks for you</h1>
    <div class="container">
        <table>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            @php
                $i = 0;
            @endphp
            @foreach($myTasks as $myTask)
                @foreach($tasks as $task)
                    @if($myTask->task_id == $task->id && $myTask->status == '0')
                        @php
                            $i++;
                        @endphp
                    <tr>
                        <td>{{$i}}</td>
                        <th>
                            <h3>{{$task->title}}</h3>
                            <p>{{$task->description}}</p>
                        </th>
                        <th>
                            <form action="{{route('taskStatus')}}" method="post">
                                @csrf
                                <input type="text" name="taskID" value="{{$task->id}}" style="display: none">
                                <button type="submit" class="btn btn-success">Accept</button>
                            </form>
                            <button class="btn btn-danger">Reject</button>
                        </th>
                    </tr>
                    @endif
                @endforeach
            @endforeach
        </table>
    </div>
@endsection
