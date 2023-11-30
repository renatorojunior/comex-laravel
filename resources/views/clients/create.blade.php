@extends('layouts.app')

@php
$title = 'Adicionar Cliente';
@endphp

@section('content')
    <div class="container mt-5">
        <h1 class="model-title mb-4">Adicionar Cliente</h1>

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
    
        <form action="{{ route('clients.store') }}" method="post">
            @csrf
            <div class="form-group row mb-2">
                <div class="form-group col-md-6">
                    <label class="form-control-plaintext" for="name">Nome:</label>
                    <input class="form-control" type="text" name="name" value="{{ old('name') }}" required>
                </div>
                <div class="form-group col-md-3">                    
                    <label class="form-control-plaintext" for="cpf">CPF:</label>
                    <input class="form-control" type="text" name="cpf" placeholder="000.000.000-00" value="{{ old('cpf') }}"  required>
                </div>
                <div class="form-group col-md-3">    
                    <label class="form-control-plaintext"  for="phone">Celular:</label>
                    <input class="form-control" type="text" name="phone" placeholder="(00) 0 0000-0000" value="{{ old('phone') }}" required>                    
                </div>
            </div>
            <div class="form-group row mb-2">
                <div class="form-group col-md-7">
                    <label class="form-control-plaintext" for="street">Rua:</label>
                    <input class="form-control" type="text" name="street" value="{{ old('street') }}" required>
                </div>
                <div class="form-group col-md-2">
                    <label class="form-control-plaintext" for="number">Nº:</label>
                    <input class="form-control" type="text" name="number" value="{{ old('number') }}" required>
                </div>
                <div class="form-group col-md-3">
                    <label class="form-control-plaintext" for="complement">Complemento:</label>
                    <input class="form-control" type="text" name="complement" value="{{ old('complement') }}" >
                </div>
            </div>
            <div class="form-group row mb-5">
                <div class="form-group col-md-6">
                    <label class="form-control-plaintext" for="neighborhood">Bairro:</label>
                    <input class="form-control" type="text" name="neighborhood" value="{{ old('neighborhood') }}" required>
                </div>
                <div class="form-group col-md-4">
                    <label class="form-control-plaintext" for="city">Cidade:</label>
                    <input class="form-control" type="text" name="city" value="{{ old('city') }}" required>
                </div>
                <div class="form-group col-md-2">
                    <label class="form-control-plaintext" for="state">Estado:</label>
                    <select class="form-control" name="state" value="{{ old('state') }}" required>
                        <option>Selecione...</option>
                        @foreach(['AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MS', 'MT', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO'] as $state)
                            <option value="{{ $state }}">{{ $state }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button class="btn btn-success" type="submit">Adicionar</button>
            <a class="btn btn-primary" href="{{ route('clients.index') }}">Cancelar</a>
        </form>
    </div>
@endsection
