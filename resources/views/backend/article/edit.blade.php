@extends('backend.layout')

@section('title', 'Article Edit' . $article->name)

@section('content')
<p><a href="{{ route('backend.article.index') }}">Back to articles</a></p>

<form method="POST" action="{{ route('backend.article.update', $article->id) }}">
    @csrf
    @method('PUT')
    <p>
        <label for="name">Name: </label>
        <input type="text" placeholder="Name" name="name" id="name" value="{{ $article->name }}">
    </p>
    <p>
        <label for="url">Url: </label>
        <input type="text" placeholder="Url" name="url" value="{{ $article->url }}">
    </p>
    <p>
        <label for="category_id">Category: </label>
        <select name="category_id" id="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{  $category->id === $article->category_id ? 'selected' : ''}}>{{ $category->name }}</option>
            @endforeach
        </select>
    </p>
    <p>
        <span>Enable: </span>
        <label for="yes">Yes</label>
        <input type="radio" name="enabled" id="yes" value="1" {{ $article->enabled ? 'checked' : '' }}>
        <label for="no">No</label>
        <input type="radio" name="enabled" id="no" value="0" {{ !$article->enabled ? 'checked' : '' }}>
    </p>
    <p>
        <textarea name="content" cols="100" rows="20"></textarea>
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>
@endsection
