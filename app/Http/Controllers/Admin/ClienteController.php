<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        
        return view('admin.clientes.index', compact('clientes'));
    }

    
    public function create()
    {
        return view('admin.clientes.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'direccion' => 'required',
            'cedula' => 'required|unique:clientes',
            'edad' => 'required',
            'telefono' => 'required',
            'email' => 'required|unique:clientes',
        ]);

        $cliente = Cliente::create($request->all());

        return redirect()->route('admin.clientes.index', $cliente)->with('info', 'El cliente se creo con exito');
    }

    public function show(Cliente $cliente)
    {
        return view('admin.clientes.show', compact('cliente'));
    }

    public function edit(Cliente $cliente)
    {
        return view('admin.clientes.edit', compact('cliente'));
    }

    
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    
    public function destroy(Cliente $cliente)
    {
        //
    }
}
