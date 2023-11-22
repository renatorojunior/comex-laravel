@extends('layouts.app')

@section('content')
    <h1>Adicionar Categoria</h1>

    <form action="{{ route('categories.store') }}" method="post">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" name="name" required>
        <button type="submit">Adicionar</button>
    </form>
@endsection