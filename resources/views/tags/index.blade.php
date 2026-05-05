@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Tags</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('tags.create') }}" class="btn btn-primary mb-3">
        Nuovo Tag
    </a>

    @foreach($tags as $tag)
        <div class="card mb-2">
            <div class="card-body d-flex justify-content-between align-items-center">
                <span class="badge text-white"
                      style="background-color: {{ $tag->color }}">
                    {{ $tag->name }}
                </span>

                <div>
                    <a href="{{ route('tags.edit', $tag) }}"
                       class="btn btn-sm btn-warning">Modifica</a>

                    <form action="{{ route('tags.destroy', $tag) }}"
                          method="POST"
                          class="d-inline">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-sm btn-danger">
                            Elimina
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    {{ $tags->links() }}
</div>
@endsection