<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\User;
use App\Models\horario_agenda;

class horario_agendaController extends Controller
{
    public function index()
    {
        $horarios = horario_agenda::select("horario_agendas.*","servicios.nombre_servicio","users.name")
        ->join("servicios", "horario_agendas.id_servi","=", "servicios.id")
        ->join("users", "horario_agendas.id_user","=", "users.id")
        ->get();

        return view('admin.horario_agenda.index', compact('horarios'));
    }

    public function create()
    {
        $servicios = Servicio::where('estado',1)->get();
        $users = User::all();

        return view('admin.horario_agenda.create',compact('users','servicios'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'Estado' => 'nullable',
            'Fecha'=>'required',
            'Hora_ini' => 'required',
            'Hora_fin'=>'required',
            'id_user'=>'nullable',
            'id_servi' => 'nullable',


        ]);

        $horarios = horario_agenda::create($request->all());

        return redirect()->route('admin.horario_agenda.index', $horarios)->with('info', 'el horario se creo con exito');
    }


    public function edit(horario_agenda $horarios)
    {

        $servicios = Servicio::pluck('nombre_servicio', 'id');
        $users = User::all();

        return view('admin.horario_agenda.edit', compact('horarios','servicios','users'));
    }


    public function update(Request $request, horario_agenda $horarios)
    {
        $request->validate([
            'Estado' => 'nullable',
            'Fecha'=>'required',
            'Hora_ini' => 'required',
            'Hora_fin'=>'required',
            'id_user'=>'nullable',
            'id_servi' => 'nullable',
        ]);

        $horarios->update($request->all());

        return redirect()->route('admin.horario_agenda.index', $horarios)->with('info', 'El horarios se actualizo con exito');
    }



}

