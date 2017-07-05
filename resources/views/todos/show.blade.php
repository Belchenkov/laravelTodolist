@extends('layouts.app')

@section('content')

    @if(count($todo) > 0)

    <a href="/" class="btn btn-outline-secondary">Go Back</a>

    <h1 class="text-center">{{ $todo->text }}</h1>


        <div class="card">
                <div class="card-block">
                    <p class="card-title"><span class="badge badge-info">{{ $todo->due }}</span></p>
                    <hr>
                    <p class="card-text">{{ $todo->body }}</p>
                    <a href="/todo/{{$todo->id}}/edit" id="btn-edit" class="btn btn-warning">Edit</a>
                    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'post', 'id' => 'btn-delete']) !!}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
                    {!! Form::close() !!}
                </div>
        </div>
    @endif

@endsection