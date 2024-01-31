@extends('layouts.app')

@section('header')
    <h1>Список статей</h1>
@endsection

@section('content')
    @foreach($articles as $article)
        <h2><a href="{{ route('articles.show', ['id' => $article->id]) }}">{{ $article->name }}</a></h2>
        <p>{{ $article->body }}</p>
    @endforeach
    <div>{{ $articles->links() }}</div>
@endsection
