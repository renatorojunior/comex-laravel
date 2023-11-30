@extends('layouts.app')

@php
$title = 'Editar Produto';
@endphp

@section('content')
    <div class="container mt-5">
        <h1 class="model-title mb-4">Editar Produto</h1>

        @if(session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.update', $product->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group row mb-2">
                <div class="form-group col-md-8">
                    <label class="form-control-plaintext" for="name">Nome:</label>
                    <input class="form-control" type="text" name="name" value="{{ $product->name }}" required>
                </div>            
                <div class="form-group col-md-4">
                    <label class="form-control-plaintext" for="category_id">Categoria:</label>                
                    <select class="form-control" name="category_id" required>
                    <option value="{{ $product->category_id }}" selected>{{ $product->category->name }}</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-2">
                <label class="form-control-plaintext" for="description">Descrição:</label>            
                <textarea class="form-control" name="description" required>{{ $product->description }}</textarea>
            </div>
            <div class="form-group row mb-5">
                <div class="form-group col-md-2">
                    <label class="form-control-plaintext" for="price">Preço:</label>            
                    <input class="form-control" type="text" name="price" value="{{ $product->price }}"  required>
                </div>
                <div class="form-group col-md-2">
                    <label class="form-control-plaintext" for="quantity">Quantidade em Estoque:</label>
                    <input class="form-control" type="text" name="quantity" value="{{ $product->quantity }}"  required>
                </div>
            </div>
            <div>
                <button class="btn btn-success" type="submit">Salvar</button>
                <a class="btn btn-primary" href="{{ route('products.index') }}">Cancelar</a>
            </div>           
        </form>
    </div>
@endsection
