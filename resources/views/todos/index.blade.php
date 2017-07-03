@extends('layouts.app')

@section('content')

    <h1 class="text-center">Todos</h1>

    @if(count($todos) > 0)

        <div class="card">
            @foreach($todos as $todo)
                <h3 class="card-header">
                    {{ $todo->text }}
                </h3>
                <div class="card-block">
                    <h4 class="card-title"><span class="badge badge-info">{{ $todo->due }}</span></h4>
                    <p class="card-text">{{ $todo->body }}</p>
                    <a href="#" class="btn btn-secondary">Go somewhere</a>
                </div>
            @endforeach
        </div>
    @endif

@endsection