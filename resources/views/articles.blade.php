@extends('layouts.app')

@section('content')
    <h1>liste des articles</h1>
    
    {{-- verifier si il existe un post --}}
    @if ($posts->count() )
        @foreach ($posts as $post)
            <h3><a href=" {{route('posts.show',['id' => $post->id]) }}">{{ $post->title }}</a></h3>
        @endforeach
    @else
        <span>Aucun poste en base de donné</span>
    @endif
@endsection
