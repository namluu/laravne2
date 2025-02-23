<html>
<head>
    <title>Backend @yield('title')</title>
</head>
<body>
    <h1>@yield('title')</h1>

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <nav>
        <ul>
            <li><a href="{{ route('backend.category.index') }}">Categories</a></li>
            <li><a href="{{ route('backend.article.index') }}">Articles</a></li>
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
