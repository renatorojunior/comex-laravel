@extends('layouts.app')

@php
$title = 'Editar Cliente';
@endphp

@section('content')
    <div class="container mt-5">
        <h1 class="model-title mb-4">Editar Cliente</h1>

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

        <form action="{{ route('clients.update', ['client' => $client->id]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group row mb-2">
                <div class="form-group col-md-6">
                    <label class="form-control-plaintext" for="name">Nome:</label>
                    <input class="form-control" type="text" name="name" value="{{ $client->name }}" required>
                </div>
                <div class="form-group col-md-3">                    
                    <label class="form-control-plaintext" for="cpf">CPF:</label>
                    <input class="form-control" type="text" name="cpf" value="{{ $client->cpf }}"required>
                </div>
                <div class="form-group col-md-3">    
                    <label class="form-control-plaintext"  for="phone">Celular:</label>
                    <input class="form-control" type="text" name="phone" value="{{ $client->phone }}" required>                    
                </div>
            </div>
            <div class="form-group row mb-2">
                <div class="form-group col-md-7">
                    <label class="form-control-plaintext" for="street">Rua:</label>
                    <input class="form-control" type="text" name="street"value="{{ $client->address->street }}" required>
                </div>
                <div class="form-group col-md-2">
                    <label class="form-control-plaintext" for="number">Nº:</label>
                    <input class="form-control" type="text" name="number" value="{{ $client->address->number }}" required>
                </div>
                <div class="form-group col-md-3">
                    <label class="form-control-plaintext" for="complement">Complemento:</label>
                    <input class="form-control" type="text" name="complement" value="{{ $client->address->complement }}">
                </div>
            </div>
            <div class="form-group row mb-5">
                <div class="form-group col-md-6">
                    <label class="form-control-plaintext" for="neighborhood">Bairro:</label>
                    <input class="form-control" type="text" name="neighborhood" value="{{ $client->address->neighborhood }}" required>
                </div>
                <div class="form-group col-md-4">
                    <label class="form-control-plaintext" for="city">Cidade:</label>
                    <input class="form-control" type="text" name="city" value="{{ $client->address->city }}" required>
                </div>
                <div class="form-group col-md-2">
                    <label class="form-control-plaintext" for="state">Estado:</label>
                    <select class="form-control" name="state" required>
                        <option value="{{ $client->address->state }}" selected>{{ $client->address->state }}</option>
                        @foreach(['AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MS', 'MT', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO'] as $state)
                            <option value="{{ $state }}">{{ $state }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button class="btn btn-success" type="submit">Salvar</button>
            <a class="btn btn-primary" href="{{ route('clients.index') }}">Cancelar</a>
        </form>
    </div>
@endsection
