@extends('layouts.app')

@section('header')
    <h1>Страница статьи</h1>
@endsection

@section('content')
    <h1>{{$article->name}}</h1>
    <div>{{$article->body}}</div>
@endsection
