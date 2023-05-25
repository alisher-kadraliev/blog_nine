<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Category::firstOrCreate($data);
        return redirect()->route('admin.category.index');
    }

    public function show(Category $category)
    {

        return view('admin.category.show', compact('category'));
    }

    public function edit(Category $category)
    {

        return view('admin.category.edit', compact('category'));
    }

    public function update(UpdateRequest $request, Category $category)
    {
        $request->validated();
        $category->update($request->all());

        return redirect()->route('admin.category.show', compact('category'));
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.category.index',compact('category'));
    }


}
