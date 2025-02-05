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
}
