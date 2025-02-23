@extends('backend.layout')

@section('title', 'Article Index')

@section('content')
<p><a href="{{ route('backend') }}">Back to Dashboard</a></p>
<p><a href="{{ route('backend.article.create') }}">Add</a></p>

<table border="1">
    <tr>
        <td>Name</td>
        <td>Active</td>
        <td>Action</td>
    </tr>
    @foreach($articles as $article)
    <tr>
        <td><?= $article->name ?></td>
        <td><?= $article->enabled ?></td>
        <td>
            <a href="{{ route('backend.article.edit', $article->id) }}">Update</a>
            <form action="{{ route('backend.article.destroy', $article->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
