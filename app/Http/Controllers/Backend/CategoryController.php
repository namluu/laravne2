<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = Category::all();

        return view('backend.category.index', ['categories' => $categories]);
    }

    public function create(): View
    {
        return view('backend.category.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Category::create($data);

        return redirect()->route('backend.category.index');
    }
}
