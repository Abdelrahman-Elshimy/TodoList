
@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 style="margin-top: 20px; margin-bottom: 20px;">Todo</h1>
        <div class="card card-body bg-light todo" style="margin-bottom: 20px;">
            <h1> <a href="todo/{{$todo->id}}">{{ $todo->title }}</a>  <span class="badge badge-danger">{{ $todo->due }}</span></h1>
            <hr>
            <p class="lead">{{ $todo->body }}</p>
        </div>

    </div>

@endsection

