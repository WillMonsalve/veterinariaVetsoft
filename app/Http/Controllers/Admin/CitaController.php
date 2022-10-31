<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cita;

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
        return view('admin.citas.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'estado' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'servicio' => 'required',
            'cliente' => 'required',
        ]);

        $cita = Cita::create($request->all());

        return redirect()->route('admin.citas.index', $cita)->with('info', 'La cita se registro con exito');;
    }


   /*  public function show(Cita $cita)
    {
        return view('admin.citas.show', compact('cita'));
    } */


    public function edit(Cita $cita)
    {
        return view('admin.citas.edit', compact('cita'));
    }


    public function update(Request $request, Cita $cita)
    {
        $request->validate([
            'estado' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'servicio' => 'required',
            'cliente' => 'required',
        ]);

        $cita->update($request->all());

        return redirect()->route('admin.citas.edit', $cita)->with('info', 'La Cita Se actualizo con exito');
    }


    public function destroy(Cita $cita)
    {
        $cita->delete();

        return redirect()->route('admin.citas.index')->with('info', 'La cita se elimino con exito');;
    }
}
