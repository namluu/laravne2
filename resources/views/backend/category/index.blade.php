<h1>category index</h1>

<p><a href="{{ route('backend') }}">Back to Dashboard</a></p>
<p><a href="{{ route('backend.category.create') }}">Add</a></p>

<table>
    <tr>
        <td>Name</td>
        <td>Url</td>
        <td>Active</td>
    </tr>
    @foreach($categories as $category)
    <tr>
        <td><?= $category->name ?></td>
        <td><?= $category->url ?></td>
        <td><?= $category->enabled ?></td>
    </tr>
    @endforeach
</table>
