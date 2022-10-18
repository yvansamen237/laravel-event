@extends('layouts.app')

@section('titre')
    <title>liste des articles </title>
@endsection

@section('contenu')
    <h1>liste des articles</h1>
    @if ($posts->count() > 0)
        @foreach ($posts as $post)
            <h3><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a></h3>
        @endforeach
    @else
        <span>pas de posts trouve</span>
    @endif

    </body>
@endsection
