<h1>backend index view</h1>

@auth('admin')
<p>Hello: <?= $user->name ?></p>

<ul>
    <li><a href="{{ route('backend.category.index') }}">Categories</a></li>
</ul>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="btn btn-primary btn-block">logout</button>
</form>
@endauth
