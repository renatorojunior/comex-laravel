@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="modal-title">Listagem de Categorias</h1>
    
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    
        <ul class="list-group list-group-flush">
            @foreach($categories as $category)
                <li class="list-group-item hstack gap-3">                    
                        {{ $category->name }}                    
                    <a class="btn btn-secondary ms-auto" href="{{ route('categories.edit', $category->id) }}">Editar</a>
                    <a class="btn btn-dark" href="{{ route('categories.confirm-delete', $category) }}">Remover</a>
                </li>
            @endforeach
        </ul>
    
        <a class="btn btn-primary" href="{{ route('categories.create') }}">Adicionar Categoria</a>
    </div>
@endsection