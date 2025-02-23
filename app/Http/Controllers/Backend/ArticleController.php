<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index(): View
    {
        $articles = Article::all();

        return view('backend.article.index', ['articles' => $articles]);
    }

    public function create(): View
    {
        $categories = Category::all();

        return view('backend.article.create', ['categories' => $categories]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->all();
        $data['user_id'] = Auth::id();
        Article::create($data);

        return redirect()->route('backend.article.index')->with('success', 'Article created successfully.');
    }

    public function edit($id): View
    {
        $article = Article::find($id);
        $categories = Category::all();

        return view('backend.article.edit', ['article' => $article, 'categories' => $categories]);
    }

    public function update($id): RedirectResponse
    {
        $article = Article::find($id);
        $article->update(request()->all());

        return redirect()->route('backend.article.index')->with('success', 'Article updated successfully.');
    }

    public function destroy($id): RedirectResponse
    {
        $article = Article::find($id);
        $article->delete();

        return redirect()->route('backend.article.index')->with('success', 'Article deleted successfully.');
    }
}
