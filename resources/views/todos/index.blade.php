@extends('layouts.app')

@section('content')

    <h1 class="text-center">Todos</h1>

    @if(count($todos) > 0)

        <div class="card">
            @foreach($todos as $todo)
                <h3 class="card-header">
                   <a href="todo/{{ $todo->id }}">{{ $todo->text }}</a> 
                </h3>
                <div class="card-block">
                    <p class="card-title"><span class="badge badge-info">{{ $todo->due }}</span></p>
                </div>
            @endforeach
        </div>
    @endif

@endsection