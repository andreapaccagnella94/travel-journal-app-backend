@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>{{ $post->title }}</h1>

    <p>{{ $post->description }}</p>

    @if (count($post->tags) > 0)
        <div class="d-flex flex-wrap gap-2 mt-3">
            @foreach ($post->tags as $tag)
                {{-- <a href="{{route ("technologies.show", $technology->id)}}"> --}}
                    <span class="badge border" style="background-color: {{$tag->color}}" >{{$tag->name}}</span>
                {{-- </a> --}}
            @endforeach
        </div>
    @endif

    <a href="{{ route('posts.edit', $post) }}" class="btn btn-secondary my-2">Modifica</a>

    <form method="POST" action="{{ route('posts.destroy', $post) }}">
        @csrf
        @method('DELETE')
        {{-- aggiungere modale --}}
        <button class="btn btn-danger">Elimina</button>
    </form>
</div>
@endsection