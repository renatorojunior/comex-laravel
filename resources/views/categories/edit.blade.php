@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="modal-title">Editar Categoria</h1>
    
        <form class="row g-3" action="{{ route('categories.update', $category->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="col-auto">
                <label class="form-control-plaintext" for="name">Nome:</label>
            </div>
            <div class="col-auto">                
                <input class="form-control" type="text" name="name" value="{{ $category->name }}" required>
            </div>
            <div class="col-auto">                
                <button class="btn btn-success mb-3" type="submit">Atualizar</button>
            </div>
        </form>
    
        <a class="btn btn-primary" href="{{ route('categories.index') }}">Cancelar</a>
    </div>
@endsection