<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function __construct()
    {
         $this->middleware('can:admin.clientes.index')->only('index');
         $this->middleware('can:admin.clientes.create')->only('create', 'store');
         $this->middleware('can:admin.clientes.edit')->only('edit', 'update');
         $this->middleware('can:admin.clientes.show')->only('show');
         $this->middleware('can:admin.clientes.destroy')->only('destroy');
    }

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
            'nombre_cliente' => 'required',
            'apellido' => 'required',
            'direccion' => 'required',
            'cedula' => 'required|unique:clientes',
            'edad' => 'required',
            'telefono' => 'required',
            'email' => 'required|unique:clientes',
            'estado' => 'nullable',

        ]);

        $cliente = Cliente::create($request->all());

        return redirect()->route('admin.clientes.index', $cliente)->with('info', 'El cliente se creo con exito');
    }

     public function show($id)
    {
        $cliente=Cliente::findOrFail($id);
        // dd($cliente);
        return view('admin.clientes.show', compact('cliente'));
    }

    // public function show(Cliente $cliente)
    // {
    //     return view('admin.clientes.show', compact('cliente'));
    // }

    public function edit(Cliente $cliente)
    {
        return view('admin.clientes.edit', compact('cliente'));
    }


    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nombre_cliente' => 'required',
            'apellido' => 'required',
            'direccion' => 'required',
            'cedula' => 'required',
            'edad' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'estado' => 'nullable',

        ]);

        $cliente->update($request->all());

        return redirect()->route('admin.clientes.index', $cliente)->with('info', 'El cliente se actualizo con exito');
    }


    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect()->route('admin.clientes.index')->with('info', 'El servicio se elimino con exito');
    }
}
