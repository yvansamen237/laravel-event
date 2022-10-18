@extends('layouts.app')
@section('titre')
    <title>nouveau post</title>
@endsection

@section('contenu')
    <h1>creer un nouveau post</h1>

    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" class=" border-gray-600 border-2 block my-2">
        <textarea name="content" id="" class=" border-gray-600 border-2 block my-2" cols="30" rows="10"></textarea>

        <label for="avatar">choisir un photo d'avatar</label>
        <input type="file" class="block my-2" id="avatar" name="avatar" accept="image/png, image/jpg">

        <button type="submit">Creer un post</button>
    </form>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif
@endsection
