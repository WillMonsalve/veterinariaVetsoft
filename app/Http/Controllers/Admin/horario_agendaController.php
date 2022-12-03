<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\Servicio;
use App\Models\horario_agenda;

class horario_agendaController extends Controller
{
    public function index()
    {

        $horarios = horario_agenda::select("horario_agendas.*","servicios.nombre_servicio")
        ->join("servicios", "horario_agendas.id_servi","=", "servicios.id")
        ->get();

        return view('admin.horario_agenda.index', compact('horarios'));
    }

    public function create()
    {
        $servicios = Servicio::all();
        $roles= role::all();

        return view('admin.horario_agenda.create',compact('servicios'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'Estado' => 'nullable',
            'Fecha'=>'required',
            'Hora_ini' => 'required',
            'Hora_fin'=>'required',
            'id_Rol'=>'nullable',
            'id_servi' => 'nullable',


        ]);

        $horarios = horario_agenda::create($request->all());

        return redirect()->route('admin.horario_agenda.index', $horarios)->with('info', 'el horario se creo con exito');
    }


}

