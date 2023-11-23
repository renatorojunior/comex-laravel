@extends('layouts.app')

@section('content')
    <h1>Editar Categoria</h1>

    <form action="{{ route('categories.update', $category->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Nome:</label>
        <input type="text" name="name" value="{{ $category->name }}" required>
        <button type="submit">Atualizar</button>
    </form>

    <a href="{{ route('categories.index') }}">Cancelar</a>
@endsection