@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crea Tag</h1>

    <form method="POST" action="{{ route('tags.store') }}">
        @include('tags.partials.form')
    </form>
</div>
@endsection