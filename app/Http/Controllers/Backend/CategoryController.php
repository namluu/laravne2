<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
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

    public function store(Request $request): RedirectResponse
    {
        $data = $request->all();
        Category::create($data);

        return redirect()->route('backend.category.index')->with('success', 'Category created successfully.');
    }

    public function edit($id): View
    {
        $category = Category::find($id);

        return view('backend.category.edit', ['category' => $category]);
    }

    public function update($id): RedirectResponse
    {
        $category = Category::find($id);
        $category->update(request()->all());

        return redirect()->route('backend.category.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id): RedirectResponse
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('backend.category.index')->with('success', 'Category deleted successfully.');
    }
}
