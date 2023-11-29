@extends('layouts.app')

@php
    $title = 'Confirmar Exclusão de Produto';
@endphp

@section('content')
    <div class="container mt-5 mb-4">
        <h1 class="modal-title mb-4">Confirmar Exclusão</h1>

        <p class="lead mb-5">Você tem certeza que deseja excluir o produto <b>{{ $product->name }}</b>?</p>

        <form action="{{ route('products.destroy', $product->id) }}" method="post">
            @csrf
            @method('DELETE')

            <button class="btn btn-dark" type="submit">Excluir</button>
            <a class="btn btn-primary" href="{{ route('products.index') }}">Cancelar</a>
        </form>
    </div>
@endsection
