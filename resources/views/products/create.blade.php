@extends('layouts.app')

@php
$title = 'Adicionar Produto';
@endphp

@section('content')
    <div class="container mt-5">
        <h1 class="model-title mb-4">Adicionar Produto</h1>

        <form class="row g-3 mb-4" action="{{ route('products.store') }}" method="post">
            @csrf
            <div class="form-group row mb-2">
                <div class="form-group col-md-8">
                    <label class="form-control-plaintext" for="name">Nome:</label>
                    <input class="form-control" type="text" name="name" required>
                </div>            
                <div class="form-group col-md-4">
                    <label class="form-control-plaintext" for="category_id">Categoria:</label>                
                    <select class="form-control" name="category_id" required>
                    <option value="" selected>Selecione...</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-2">
                <label class="form-control-plaintext" for="description">Descrição:</label>            
                <textarea class="form-control" name="description" required></textarea>
            </div>
            <div class="form-group row mb-5">
                <div class="form-group col-md-2">
                    <label class="form-control-plaintext" for="price">Preço:</label>            
                    <input class="form-control" type="text" name="price" placeholder="0.00" required>
                </div>
                <div class="form-group col-md-2">
                    <label class="form-control-plaintext" for="quantity">Quantidade em Estoque:</label>
                    <input class="form-control" type="text" name="quantity" required>
                </div>
            </div>
            <div>
                <button class="btn btn-success" type="submit">Adicionar</button>
                <a class="btn btn-primary" href="{{ route('products.index') }}">Cancelar</a>
            </div>
        </form>

    </div>
@endsection