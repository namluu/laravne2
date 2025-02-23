<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    @foreach($categories as $category)
                    <li><a href="./category/{{ $category->url }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </nav>
        </header>
        <main>
            <section>
                @foreach($articles as $article)
                    <div><a href="{{ Route('article', $article->url) }}">{{ $article->name }}</a></div>
                @endforeach
            </section>
            <section>SECTION 2</section>
            <section>SECTION 3</section>
        </main>
        <footer>FOOTER</footer>
    </body>
</html>
