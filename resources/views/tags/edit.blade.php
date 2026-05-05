@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Modifica Tag</h1>

    <form method="POST" action="{{ route('tags.update', $tag) }}">
        @include('tags.partials.form')
    </form>
</div>
@endsection