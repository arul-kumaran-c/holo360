<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::select('id', 'name', 'created_at', 'updated_at')->get();

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        Category::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('categories.index');
    }

    public function edit(int $id)
    { 
        $category =  Category::findOrFail ($id);

        return view('categories.edit', compact('category'));
    }

    public function update(int $id, Request $request)
    {
        $category = Category::findOrFail($id);
        $category->update([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('categories.index');
    }

    public function destroy(int $id)
    {
        $category =Category::findOrFail($id);
            $category->delete();

            return redirect()->route('categories.index');
        }
    
}
