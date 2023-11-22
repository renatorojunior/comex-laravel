<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        // Nova categoria
        $category = new Category;
        $category->name = $request->input('name');
        $category->save();

        // Redirecionando para '/categories.index'
        return redirect('/categories');
    }
}
