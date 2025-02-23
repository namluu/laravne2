@extends('backend.layout')

@section('title', 'Article Create')

@section('content')
<p><a href="{{ route('backend.article.index') }}">Back to articles</a></p>

<form method="POST" action="{{ route('backend.article.store') }}">
    @csrf
    <p>
        <label for="name">Name: </label>
        <input type="text" placeholder="Name" name="name" id="name">
    </p>
    <p>
        <label for="url">Url: </label>
        <input type="text" placeholder="Url" name="url">
    </p>
    <p>
        <label for="category_id">Category: </label>
        <select name="category_id" id="category_id">
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </p>
    <p>
        <span>Enable: </span>
        <label for="yes">Yes</label>
        <input type="radio" name="enabled" id="yes" value="1" checked>
        <label for="no">No</label>
        <input type="radio" name="enabled" id="no" value="0">
    </p>
    <p>
        <textarea name="content"></textarea>
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>
@endsection
