<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name')->get();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        // Criando Validação.
        $request->validate([
            'name' => 'required|min:3',
        ]);

        // Mass Assignment.
        Category::create(['name' => $request->input('name')]);

        // Redirecionando com mensagem de sucesso.
        return redirect()->route('categories.index')->with('success', 'Categoria adicionada com sucesso!');
    }
}
