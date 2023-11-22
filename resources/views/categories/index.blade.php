@extends('layouts.app')

@section('content')
    <h1>Listagem de Categorias</h1>

    <ul>
        @foreach($categories as $category)
            <li>{{ $category->name }}</li>
        @endforeach
    </ul>
    <a href="{{ route('categories.create') }}">Adicionar Categoria</a>
@endsection