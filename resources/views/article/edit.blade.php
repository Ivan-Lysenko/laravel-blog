@extends('layouts.app')

@section('header')
    <h1>Создать новую статью</h1>
@endsection

@section('content')

    {{ Form::model($article, ['route' => ['articles.update', $article], 'method' => 'patch']) }}
        @include('article.form')
        {{ Form::submit('Обновить') }}
    {{ Form::close() }}
@endsection
