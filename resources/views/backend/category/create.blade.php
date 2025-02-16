<h1>category create</h1>

<p><a href="{{ route('backend.category.index') }}">Back to categories</a></p>

<form method="POST" action="{{ route('backend.category.store') }}">
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
        <span>Enable: </span>
        <label for="yes">Yes</label>
        <input type="radio" name="enabled" id="yes" value="1" checked>
        <label for="no">No</label>
        <input type="radio" name="enabled" id="no" value="0">
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>
