<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $categories = $this->categoryRepository->all();
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
        $this->categoryRepository->create(['name' => $request->input('name')]);

        // Redirecionando com mensagem de sucesso.
        return redirect()->route('categories.index')->with('success', 'Categoria adicionada com sucesso!');
    }

    public function destroy(Category $category)
    {
        return redirect()->route('categories.confirm-delete', $category);
    }

    public function confirmDelete(Category $category)
    {
        return view('categories.confirm-delete', compact('category'));
    }

    public function delete(Category $category)
    {
        $this->categoryRepository->delete($category->id);
        return redirect()->route('categories.index')->with('success', 'Categoria removida com sucesso!');
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        // Validação.
        $request->validate([
            'name' => 'required|min:3',
        ]);

        // Atualizando a categoria.
        $this->categoryRepository->update($category->id, ['name' => $request->input('name')]);

        // Redirecionando com mensagem de sucesso.
        return redirect()->route('categories.index')->with('success', 'Categoria atualizada com sucesso!');
    }
}