<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicio;

class ServicioController extends Controller
{

    public function __construct()
    {
         $this->middleware('can:admin.servicios.index')->only('index');
         $this->middleware('can:admin.servicios.create')->only('create', 'store');
         $this->middleware('can:admin.servicios.edit')->only('edit', 'update');
         $this->middleware('can:admin.servicios.destroy')->only('destroy');
    }


    public function index()
    {
        $servicios = Servicio::all();

        return view('admin.servicios.index', compact('servicios'));
    }


    public function create()
    {
        return view('admin.servicios.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion'=>'nullable',
            'duracion' => 'required'
        ]);

        $servicio = Servicio::create($request->all());

        return redirect()->route('admin.servicios.index', $servicio)->with('info', 'El servicio se creo con exito');
    }


   /*  public function show(Servicio $servicio)
    {
        return view('admin.servicios.show', compact('servicio'));
    } */


    public function edit(Servicio $servicio)
    {
        return view('admin.servicios.edit', compact('servicio'));
    }


    public function update(Request $request, Servicio $servicio)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable',
            'duracion' => 'required'
        ]);

        $servicio->update($request->all());

        return redirect()->route('admin.servicios.index', $servicio)->with('info', 'El servicio se actualizo con exito');
    }


    public function destroy(Servicio $servicio)
    {
        $servicio->delete();

        return redirect()->route('admin.servicios.index')->with('info', 'El servicio se elimino con exito');;
    }
}