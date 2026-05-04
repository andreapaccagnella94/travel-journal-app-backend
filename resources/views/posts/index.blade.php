@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>I miei post</h1>

    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">
        Nuovo Post
    </a>

    @foreach($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h5>{{ $post->title }}</h5>
                <p>{{ $post->description }}</p>

                <a href="{{ route('posts.show', $post) }}" class="btn btn-primary">Dettaglio</a>
            </div>
        </div>
    @endforeach

    {{ $posts->links() }}
</div>
@endsection