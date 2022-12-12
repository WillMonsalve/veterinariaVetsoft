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
           
        $clientes = Cliente::pluck('nombre_cliente', 'id');
        $mascotas = Mascota::all();
        $historias = Historia::all();
        return view('admin.historias.index', compact('historias','mascotas','clientes'));
    }

    
    public function create()
    {
        
        $clientes = Cliente::pluck('nombre_cliente', 'id');
        $mascotas = Mascota::all();
        return view('admin.historias.create', compact('mascotas','clientes'));
    }

   
    public function store(Request $request)
    {
       
        $request->validate([
            'Fecha' => 'required',
            'Diagnostico' => 'required',
            'Tratamiento' => 'required',
            'Medicamentos' => 'required',
            'Motivodeconsulta' => 'required',
            'Dieta' => 'required',
            'Vacunacion' => 'required',
            'Desparacitacion' => 'required',
            'EstadoReproductivo' => 'required',
            'Mucosas' => 'required',
            'Turgencia' => 'required',
            'Pulso' => 'required',
            'Otros' => 'required',
            'Anamnesis' => 'required',
            'Enfermedadesopadecimientosanteriores' => 'required',
            'ListaProblemas' => 'required',
            'Diagnosticosdiferenciales' => 'required',
            'Plandiagnostico' => 'required',
            'Diagnosticopresuntivo' => 'required',
            'Diagnosticodefinitivo' => 'required',
            'Pronostico' => 'required',
            'Planterapeutico' => 'required',
            'Observaciones' => 'required',
            'Tratamientoaldiagnostico' => 'required',
            'Actitud' => 'required',
            'Hidratacion' => 'required',
            'Estadonutricional' => 'required',
            'Modulossuperficiales' => 'required',
            'Sistemacardiovascular' => 'required',
            'Sistemarespiratorio' => 'required',
            'Sistemadigestivo' => 'required',
            'Sistemaurinario' => 'required',
            'Sistemanervioso' => 'required',
            'Sistemamusculo-esqueletico' => 'required',
            'Ojos' => 'required',
            'PielyAnexos' => 'required',
            'mascota_id' => 'required',
            'user_id' => 'required'
            
        ]);

        $historia = Historia::create( $request->all() );
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
         //
    }

   
    public function destroy(Historia $historia)
    {
        //
    }
}