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

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
