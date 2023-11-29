<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Address;
use App\Rules\CpfValidation;

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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'cpf' => ['required', 'unique:clients'],
            'phone' => 'required',
            'street' => 'required',
            'number' => 'required',
            'neighborhood' => 'required',
            'city' => 'required',
            'state' => 'required|size:2',
        ]);

        $client = Client::create($request->only(['name', 'cpf', 'phone']));
        $client->address()->create($request->except(['name', 'cpf', 'phone']));

        return redirect('/clients')->with('success', 'Cliente adicionado com sucesso!');
    }
}
