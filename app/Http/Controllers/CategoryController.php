<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(CategoryRequest $request)
    {
        $category = Cateogry::create($request->all());
        $categoryImage = $request->file('image')->store('public/category/image');
        $category->image = str_replace('public/','', $categoryImage);
        $category->save();
        return redirect()->route('category.index')->with('success', 'category created successfully.');
    }

    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        if($request->file('image')){
            $category->image ? unlink('storage/'. $category->image) : '';
            $category->update([
                'image'=>str_replace('public/','', $request->file('image')->store('category/image','public'))
            ]);
        }
        $category->update($request->except('image'));
        return redirect()->route('category.index')->with('success', 'category updated successfully.');
    }

    public function destroy(Category $category)
    {
        if($category->image){
            unlink('storage/'. $category->image);
        }
        $category->delete();
        return redirect()->route('category.index')->with('success', 'category deleted successfully.');
    }
}
