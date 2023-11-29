@extends('layouts.app')

@php
    $title = 'Excluir Categoria';
@endphp

@section('content')
    <div class="container mt-5 mb-4">
        <h1 class="modal-title mb-4">Confirmar Exclusão</h1>
    
        <p class="lead mb-5">Tem certeza que gostaria de excluir a Categoria <b>'{{ $category->name }}'</b>?</p>
    
        <form action="{{ route('categories.delete', $category) }}" method="post" style="display: inline;">
            @csrf
            @method('DELETE')
            <button class="btn btn-dark" type="submit">Excluir</button>
            <a class="btn btn-primary" href="{{ route('categories.index') }}">Cancelar</a>
        </form>    
    </div>
@endsection