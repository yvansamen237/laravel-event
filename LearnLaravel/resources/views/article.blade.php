@extends('layouts.app')


@section('titre')
    <title>un article</title>
@endsection

@section('contenu')
    <h1>{{ $post->content }}</h1>
@endsection
