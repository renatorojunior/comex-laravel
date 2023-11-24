@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="modal-title">Confirmar Exclusão</h1>
    
        <p class="lead">Tem certeza que gostaria de excluir a Categoria <b>'{{ $category->name }}'</b>?</p>
    
        <form action="{{ route('categories.delete', $category) }}" method="post" style="display: inline;">
            @csrf
            @method('DELETE')
            <button class="btn btn-dark" type="submit">Excluir</button>
        </form>
    
        <a class="btn btn-primary" href="{{ route('categories.index') }}">Cancelar</a>
    </div>
@endsection