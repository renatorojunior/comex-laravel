@extends('layouts.app')

@php
    $title = 'Adicionar Categoria';
@endphp

@section('content')
    <div class="container mt-5 mb-4">
        <h1 class="modal-title mb-4">Adicionar Categoria</h1>

        <form class="row g-3 mb-4" action="{{ route('categories.store') }}" method="post">
            @csrf
            <div class="col-auto">
                <label class="form-control-plaintext" for="name">Nome:</label>
            </div>
            <div class="col-auto w-50">
                <input class="form-control" type="text" name="name" required>
            </div>
            <div class="col-auto">
                <button class="btn btn-success" type="submit">Adicionar</button>
                <a class="btn btn-primary" href="{{ route('categories.index') }}">Cancelar</a>
            </div>
        </form>

    </div>
@endsection