@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Crea Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" id="description" rows="4" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label for="location_name" class="form-label">Luogo</label>
            <input type="text" name="location_name" id="location_name" class="form-control">
        </div>

        <div class="mb-3">
            <label for="mood" class="form-label">Stato d'animo</label>
            <select name="mood" required>
                <option value="felice">Felice</option>
                <option value="stressato">Stressato</option>
                <option value="emozionato">emozionato</option>
                <option value="rilassato">rilassato</option>
            </select>
        </div>

        {{-- tags --}}
        <div class="mb-3 form-control d-flex flex-wrap">
            @foreach ($tags as $tag)
                <div class="tag me-3">
                    <input type="checkbox" name="tags[]" value="{{$tag->id}}" id="tag-{{$tag->id}}">
                    <label for="tag-{{$tag->id}}" class="form-label">{{$tag->name}}</label>
                </div>
            @endforeach

        </div>

        <button type="submit">Salva</button>
    </form>
</div>
@endsection