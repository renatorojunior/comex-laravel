@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="modal-title">Adicionar Categoria</h1>

        <form class="row g-3" action="{{ route('categories.store') }}" method="post">
            @csrf
            <div class="col-auto">
                <label class="form-control-plaintext" for="name">Nome:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="text" name="name" required>
            </div>
            <div class="col-auto">
                <button class="btn btn-success mb-3" type="submit">Adicionar</button>
            </div>
        </form>

        <a class="btn btn-primary" href="{{ route('categories.index') }}">Cancelar</a>
    </div>
@endsection