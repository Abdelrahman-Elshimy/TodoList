
@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 style="margin-top: 20px; margin-bottom: 20px;">Todos</h1>
        @if(count($todos) > 0)
            @foreach ($todos as $todo)
                <div class="card card-body bg-light todo" style="margin-bottom: 20px;">
                    <h3> <a href="todo/{{$todo->id}}">{{ $todo->title }}</a>  <span class="badge badge-danger">{{ $todo->due }}</span></h3>

                </div>
            @endforeach

        @endif
    </div>

@endsection

