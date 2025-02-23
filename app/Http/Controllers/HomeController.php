<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Models\Article;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(): View
    {
        $articles = Article::all();
        $categories = Category::all();

        return view('home', ['articles' => $articles, 'categories' => $categories]);
    }

    public function showArticle(Article $article): View
    {
        return view('article', ['article' => $article]);
    }
}
