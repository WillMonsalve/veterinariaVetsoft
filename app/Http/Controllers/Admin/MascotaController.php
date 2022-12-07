<?php

namespace App\Http\Controllers\Admin;
use App\Models\Cliente;
use App\Http\Controllers\Controller;
use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    public function __construct()
    {
         $this->middleware('can:admin.mascotas.index')->only('index');
         $this->middleware('can:admin.mascotas.create')->only('create', 'store');
         $this->middleware('can:admin.mascotas.edit')->only('edit', 'update');
         $this->middleware('can:admin.mascotas.show')->only('show');
         $this->middleware('can:admin.mascotas.destroy')->only('destroy');
    }

    public function index()
    {
        $mascotas = Mascota::paginate();
        return view('admin.mascotas.index', compact('mascotas'));
    }


    public function create()
    {
        $mascota = new Mascota();
        $clientes = Cliente::pluck('nombre_cliente', 'id');
         return view('admin.mascotas.create', compact('mascota', 'clientes'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required',
            'Raza' => 'required',
            'Color' => 'required',
            'Peso' => 'required',
            'Especie' => 'required',
            'Edad' => 'required',
            'Sexo' => 'required',
            'cliente_id' => 'required',
            'estado' => 'nullable',


        ]);

        $mascota = Mascota::create($request->all());

        return redirect()->route('admin.mascotas.index', $mascota)->with('info', 'La mascota se creo con exito');
    }


    public function show(Mascota $mascota)
    {
        return view('admin.mascotas.show', compact('mascota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mascota $mascota)
    {
        // $mascota = new Mascota();
        $clientes = Cliente::pluck('nombre_cliente', 'id');
        return view('admin.mascotas.edit', compact('mascota', 'clientes'));
    }


    public function update(Request $request, Mascota $mascota)
    {
        $request->validate([
            'Nombre' => 'required',
            'Raza' => 'required',
            'Color' => 'required',
            'Peso' => 'required',
            'Especie' => 'required',
            'Edad' => 'required',
            'Sexo' => 'required',
            'cliente_id' => 'required',
            'estado' => 'nullable',

        ]);

        $mascota->update($request->all());

        return redirect()->route('admin.mascotas.index', $mascota)->with('info', 'La mascota se actualizo con exito');
    }


    public function destroy(Mascota $mascota)
    {
        $mascota->delete();
        return redirect()->route('admin.mascotas.index')->with('info', 'La mascota se elimino con exito');
    }
}
