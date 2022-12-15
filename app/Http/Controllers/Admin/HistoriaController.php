<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Historia;
use Illuminate\Http\Request;
use App\Models\Mascota;
// use App\Models\User;
use App\Models\Cliente;

class HistoriaController extends Controller
{
   public function __construct()
    {
        $this->middleware('can:admin.historias.index')->only('index');
        $this->middleware('can:admin.historias.create')->only('create', 'store');
        $this->middleware('can:admin.historias.edit')->only('edit', 'update');
        $this->middleware('can:admin.historias.show')->only('show');
        $this->middleware('can:admin.historias.destroy')->only('destroy');
    }

    public function index()
    {

        $historia = Historia::select("historias.*", "mascotas.Nombre")
        ->join("mascotas", "historias.mascota_id","=", "mascotas.id")
        ->get();

        return view('admin.historias.index', compact('historia'));
    }


    public function create()
    {
        $mascotas = Mascota::all();
        return view('admin.historias.create', compact('mascotas'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'Fecha' => 'nullable',
            'Diagnostico' => 'nullable',
            'Tratamiento' => 'nullable',
            'Medicamentos' => 'nullable',
            'Motivodeconsulta' => 'nullable',
            'Dieta' => 'nullable',
            'Vacunacion' => 'nullable',
            'Desparacitacion' => 'nullable',
            'EstadoReproductivo' => 'nullable',
            'Mucosas' => 'nullable',
            'Turgencia' => 'nullable',
            'Pulso' => 'nullable',
            'Otros' => 'nullable',
            'Anamnesis' => 'nullable',
            'Enfermedadesoprocedimientosanteriores' => 'nullable',
            'ListaProblemas' => 'nullable',
            'Diagnosticosdiferenciales' => 'nullable',
            'Plandiagnostico' => 'nullable',
            'Diagnosticopresuntivo' => 'nullable',
            'Diagnosticodefinitivo' => 'nullable',
            'Pronostico' => 'nullable',
            'Planterapeutico' => 'nullable',
            'Observaciones' => 'nullable',
            'Tratamientoaldiagnostico' => 'nullable',
            'Actitud' => 'nullable',
            'Hidratacion' => 'nullable',
            'Estadonutricional' => 'nullable',
            'Modulossuperficiales' => 'nullable',
            'Sistemacardiovascular' => 'nullable',
            'Sistemarespiratorio' => 'nullable',
            'Sistemadigestivo' => 'nullable',
            'Sistemaurinario' => 'nullable',
            'Sistemanervioso' => 'nullable',
            'Sistemamusculo-esqueletico' => 'nullable',
            'Ojos' => 'nullable',
            'PielyAnexos' => 'nullable',
            'mascota_id' => 'nullable',


        ]);

        $historia = Historia::create($request->all());
        return redirect()->route('admin.historias.index', $historia)->with('info', 'La Historia se creo con exito');
    }


    public function show(Historia $historia)
    {

        $clientes = Cliente::pluck('nombre_cliente', 'id');
        $mascotas = Mascota::all();
        return view('admin.historias.show', compact('historias'));
    }


    public function edit(Historia $historia)
    {

        $clientes = Cliente::pluck('nombre_cliente', 'id');
        $mascotas = Mascota::all();
        return view('admin.historias.edit', compact('historia'));
    }


    public function update(Request $request, Historia $historia)
    {
        $request->validate([
            'Fecha' => 'nullable',
            'Diagnostico' => 'nullable',
            'Tratamiento' => 'nullable',
            'Medicamentos' => 'nullable',
            'Motivodeconsulta' => 'nullable',
            'Dieta' => 'nullable',
            'Vacunacion' => 'nullable',
            'Desparacitacion' => 'nullable',
            'EstadoReproductivo' => 'nullable',
            'Mucosas' => 'nullable',
            'Turgencia' => 'nullable',
            'Pulso' => 'nullable',
            'Otros' => 'nullable',
            'Anamnesis' => 'nullable',
            'Enfermedadesoprocedimientosanteriores' => 'nullable',
            'ListaProblemas' => 'nullable',
            'Diagnosticosdiferenciales' => 'nullable',
            'Plandiagnostico' => 'nullable',
            'Diagnosticopresuntivo' => 'nullable',
            'Diagnosticodefinitivo' => 'nullable',
            'Pronostico' => 'nullable',
            'Planterapeutico' => 'nullable',
            'Observaciones' => 'nullable',
            'Tratamientoaldiagnostico' => 'nullable',
            'Actitud' => 'nullable',
            'Hidratacion' => 'nullable',
            'Estadonutricional' => 'nullable',
            'Modulossuperficiales' => 'nullable',
            'Sistemacardiovascular' => 'nullable',
            'Sistemarespiratorio' => 'nullable',
            'Sistemadigestivo' => 'nullable',
            'Sistemaurinario' => 'nullable',
            'Sistemanervioso' => 'nullable',
            'Sistemamusculo-esqueletico' => 'nullable',
            'Ojos' => 'nullable',
            'PielyAnexos' => 'nullable',
            'mascota_id' => 'nullable',
        ]);

        $historia->update($request->all());

        return redirect()->route('admin.historias.index', $historia)->with('info', 'La Historia se actualizo con exito');
    }


    public function destroy(Historia $historia)
    {
        $historia->delete();

        return redirect()->route('admin.historias.index')->with('info', 'La Historia se elimino con exito');
    }
}
