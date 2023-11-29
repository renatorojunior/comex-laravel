@extends('layouts.app')

@php
$title = 'Clientes';
@endphp

@section('content')
    <div class="container mt-5">
        <h1 class="model-title mb-4">Listagem de Clientes</h1>

        @if(session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif
    
        <table class="table table-hover mb-5">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Endereço</th>                    
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->cpf }}</td>
                        <td>{{ $client->phone }}</td>
                        <td>
                            {{ $client->address->street }}, 
                            {{ $client->address->number }} - 
                            {{ $client->address->complement ? ''. $client->address->complement.' -' : ''  }} 
                            {{ $client->address->neighborhood }},
                            {{ $client->address->city }}/{{ $client->address->state }}
                        </td>                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('clients.create') }}" class="btn btn-primary">Adicionar Cliente</a>
        </div>

@endsection