@extends('layouts.app')

@section('content')
    <h1>Listagem de Categorias</h1>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <ul>
        @foreach($categories as $category)
            <li>
                {{ $category->name }}
                <a href="{{ route('categories.edit', $category->id) }}">Editar</a>
                <a href="{{ route('categories.confirm-delete', $category) }}">Remover</a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('categories.create') }}">Adicionar Categoria</a>
@endsection