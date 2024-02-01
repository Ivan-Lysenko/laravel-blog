@extends('layouts.app')

@section('header')
    <h1>Создать новую статью</h1>
@endsection

@section('content')
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{ Form::model($article, ['route' =>'articles.store', 'method' => 'post']) }}
        {{ Form::text('name') }}
        {{ Form::textarea('body') }}
        {{ Form::submit('Сохранить') }}
    {{ Form::close() }}
@endsection
