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
            'Motivo de consulta' => 'required',
            'Dieta' => 'required',
            'Vacunacion' => 'required',
            'Desparacitacion' => 'required',
            'Estado Reproductivo' => 'required',
            'Mucosas' => 'required',
            'Turgencia' => 'required',
            'Pulso' => 'required',
            'Otros' => 'required',
            'Anamnesis' => 'required',
            'Enfermedades o padecimientos anteriores' => 'required',
            'Lista Problemas' => 'required',
            'Diagnosticos diferenciales' => 'required',
            'Plan diagnostico' => 'required',
            'Diagnostico presuntivo' => 'required',
            'Diagnostico definitivo' => 'required',
            'Pronostico' => 'required',
            'Plan terapeutico' => 'required',
            'Observaciones' => 'required',
            'Tratamiento al diagnostico' => 'required',
            'Actitud' => 'required',
            'Hidratacion' => 'required',
            'Estado nutricional' => 'required',
            'Modulos superficiales' => 'required',
            'Sistema cardiovascular' => 'required',
            'Sistema respiratorio' => 'required',
            'Sistema digestivo' => 'required',
            'Sistema urinario' => 'required',
            'Sistema nervioso' => 'required',
            'Sistema musculo-esqueletico' => 'required',
            'Ojos' => 'required',
            'Piel y Anexos' => 'required',
            'mascota_id' => 'required',
            'user_id' => 'required'

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
         //
    }


    public function destroy(Historia $historia)
    {
        //
    }
}
