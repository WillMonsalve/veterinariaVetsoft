<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cita;
use App\Models\Cliente;
use App\Models\Servicio;

class CitaController extends Controller
{

    /* public function __construct()
    {
         $this->middleware('can:admin.citas.index')->only('index');
         $this->middleware('can:admin.citas.create')->only('create', 'store');
         $this->middleware('can:admin.citas.edit')->only('edit', 'update');
         $this->middleware('can:admin.citas.destroy')->only('destroy');
    } */


    public function index()
    {
        $citas = Cita::all();

        return view('admin.citas.index', compact('citas'));
    }


    public function create()
    {
        $servicios = Servicio::all();
        $cliente = Cliente::all();
        return view('admin.citas.create', compact('servicios','cliente'));
    }


    public function store(Request $request)
    {
        /* $request->validate([
            'estado' => 'required',
            'fecha' => 'required',
            'hora' => 'nullable',
            'servicio_id' => 'required',
            'cliente_id' => 'required',
        ]); */

        $cita = Cita::create($request->all());

        return redirect()->route('admin.citas.index', $cita)->with('info', 'La cita se registro con exito');;
    }


   /*  public function show(Cita $cita)
    {
        return view('admin.citas.show', compact('cita'));
    } */


    public function edit(Cita $cita)
    {
        $servicios = Servicio::all();
        $cliente = Cliente::all();
        return view('admin.citas.edit', compact('cita','servicios','cliente'));
    }


    public function update(Request $request, Cita $cita)
    {
        $request->validate([
            'estado' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'servicio_id' => 'nullable',
            'cliente_id' => 'nullable',
        ]);

        $cita->update($request->all());

        return redirect()->route('admin.citas.index', $cita)->with('info', 'La Cita Se actualizo con exito');
    }


    public function destroy(Cita $cita)
    {
        $cita->delete();

        return redirect()->route('admin.citas.index')->with('info', 'La cita se elimino con exito');;
    }
}
