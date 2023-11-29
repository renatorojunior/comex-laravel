@extends('layouts.app')

@php
    $title = 'Produtos';
@endphp

@section('content')
    <div class="container mt-5">
        <h1 class="model-title mb-4">Listagem de Produtos</h1>
    
        @if(session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif
    
        <table class="table table-hover mb-5">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Categoria</th>
            <th scope="col">Preço</th>
            <th scope="col">Estoque</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category->name }}</td>
                <td>R$ {{ number_format($product->price, 2) }}</td>
                <td>{{ $product->quantity }}</td>
                <td class="w-15">
                    <a class="btn btn-secondary ms-auto" href="{{ route('products.edit', $product->id) }}">Editar</a>    
                    <a class="btn btn-dark" href="{{ route('products.confirm-delete', $product->id) }}">Excluir</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
    
        <a class="btn btn-primary" href="{{ route('products.create') }}">Adicionar Produto</a>
    </div>
@endsection
