@extends('layouts.app')

@section('header')
    <small><a href="{{ route('articles.create') }}">Новая статья</a></small>
    <h1>Список статей</h1>
@endsection

@section('content')
    @foreach($articles as $article)
        <h2><a href="{{ route('articles.show', $article) }}">{{ $article->name }}</a></h2>
        <small><a href="{{ route('articles.edit', $article) }}">Редактировать</a></small>
        <small><a href="{{ route('articles.destroy', $article) }}" data-confirm="Вы уверены?" data-method="delete" rel="nofollow">Удалить</a></small>
        <p>{{ $article->body }}</p>
    @endforeach
{{--    <div>{{ $articles->links() }}</div>--}}
@endsection
