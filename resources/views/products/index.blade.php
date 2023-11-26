@extends('layouts.app')

@php
    $title = 'Produtos';
@endphp

@section('content')
    <div class="container mt-4">
        <h1 class="model-title mb-4">Listagem de Produtos</h1>
    
        @if(session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif
    
        <ul class="list-group list-group-flush mb-4">
            @foreach($products as $product)
                <li class="list-group-item">
                    {{ $product->name }} - {{ $product->category->name }} - R$ {{ number_format($product->price, 2) }} - Estoque: {{ $product->quantity }}
                </li>
            @endforeach
        </ul>
    
        <a class="btn btn-primary" href="{{ route('products.create') }}">Adicionar Produto</a>
    </div>
@endsection
