@extends('layouts.app')

@section('content')
    <h1>Confirmar Exclusão</h1>

    <p>Tem certeza que gostaria de excluir a Categoria '{{ $category->name }}'?</p>

    <form action="{{ route('categories.delete', $category) }}" method="post" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Excluir</button>
    </form>

    <a href="{{ route('categories.index') }}">Cancelar</a>
@endsection