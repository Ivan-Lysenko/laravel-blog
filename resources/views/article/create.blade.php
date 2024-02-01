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
        {{ Form::label('name', 'Название статьи') }}
        {{ Form::text('name') }}<br>
        {{ Form::label('body', 'Текст статьи') }}
        {{ Form::textarea('body') }}<br>
        {{ Form::submit('Сохранить') }}
    {{ Form::close() }}
@endsection
