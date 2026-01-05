<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardCategoryController extends Controller
{
    public function index()
    {
        return view('dashboard.categories.index', [
            'categories' => Category::all()
        ]);
    }

    public function create()
    {
        return view('dashboard.categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255|unique:categories',
        ]);

        $validated['slug'] = Str::slug($request->name);
        Category::create($validated);

        return redirect('/dashboard/categories')->with('success', 'Kategori baru berhasil dibuat!');
    }

    public function edit(Category $category)
    {
        return view('dashboard.categories.edit', [
            'category' => $category
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $rules = [
            'name' => 'required|max:255',
        ];

        if($request->name != $category->name) {
            $rules['name'] = 'required|max:255|unique:categories';
        }

        $validated = $request->validate($rules);
        $validated['slug'] = Str::slug($request->name);

        $category->update($validated);

        return redirect('/dashboard/categories')->with('success', 'Kategori berhasil diupdate!');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/dashboard/categories')->with('success', 'Kategori berhasil dihapus!');
    }
}