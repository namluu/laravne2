@extends('backend.layout')

@section('title', 'Category Index')

@section('content')
<p><a href="{{ route('backend') }}">Back to Dashboard</a></p>
<p><a href="{{ route('backend.category.create') }}">Add</a></p>

<table border="1">
    <tr>
        <td>Name</td>
        <td>Url</td>
        <td>Active</td>
        <td>Action</td>
    </tr>
    @foreach($categories as $category)
    <tr>
        <td><?= $category->name ?></td>
        <td><?= $category->url ?></td>
        <td><?= $category->enabled ?></td>
        <td>
            <a href="{{ route('backend.category.edit', $category->id) }}">Update</a>
            <form action="{{ route('backend.category.destroy', $category->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
