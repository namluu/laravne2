@extends('backend.layout')

@section('title', 'Category Edit' . $category->name)

@section('content')
<p><a href="{{ route('backend.category.index') }}">Back to categories</a></p>

<form method="POST" action="{{ route('backend.category.update', $category->id) }}">
    @csrf
    @method('PUT')
    <p>
        <label for="name">Name: </label>
        <input type="text" placeholder="Name" name="name" id="name" value="{{ $category->name }}">
    </p>
    <p>
        <label for="url">Url: </label>
        <input type="text" placeholder="Url" name="url" value="{{ $category->url }}">
    </p>
    <p>
        <span>Enable: </span>
        <label for="yes">Yes</label>
        <input type="radio" name="enabled" id="yes" value="1" {{ $category->enabled ? 'checked' : '' }}>
        <label for="no">No</label>
        <input type="radio" name="enabled" id="no" value="0" {{ !$category->enabled ? 'checked' : '' }}>
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>
@endsection
