<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Address;
use App\Http\Requests\ClientRequest;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::with('address')->get();
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(ClientRequest $request)
    {
        $client = Client::create($request->only(['name', 'cpf', 'phone']));
        $client->address()->create($request->except(['name', 'cpf', 'phone']));

        return redirect('/clients')->with('success', 'Cliente adicionado com sucesso!');
    }

    public function edit(Client $client)
    {
        $client->load('address');
        return view('clients.edit', compact('client'));
    }

    public function update(ClientRequest $request, Client $client)
    {        
        $client->update($request->only(['name', 'cpf', 'phone']));
        $client->address->update($request->except(['name', 'cpf', 'phone']));

        return redirect()->route('clients.index')->with('success', 'Cliente atualizado com sucesso!');
    }

    public function destroy(Client $client)
    {        
        $client->address()->delete();
        
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Cliente removido com sucesso!');
    }

    public function confirmDelete(Client $client)
    {
        return view('clients.confirm-delete', compact('client'));
    }  
}
