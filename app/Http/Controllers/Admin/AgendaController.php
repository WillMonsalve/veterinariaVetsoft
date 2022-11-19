<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Agenda;


class AgendaController extends Controller
{
    public function index()
    {
        $agendas = Agenda::all();
       
        return view('admin.agendas.index', compact('agendas'));
    }
    public function create()
    {
        $users = user::all();
        return view('admin.agendas.create', compact('users'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'fecha_inicio' => 'nullable',
            'fecha_final'=>'nullable',
            'hora_inicio' => 'required',
            'hora_intermedia_mañana'=>'required',
            'hora_intermedia_tarde'=>'required',
            'hora_final' => 'required',
            
           
        ]);

        $agendas = agenda::create($request->all());

        return redirect()->route('admin.agendas.index', $agendas)->with('info', 'el horario se creo con exito');
    }
    
    public function destroy(Agenda $agenda)
    {
        $agenda->delete();

        return redirect()->route('admin.agendas.index')->with('info', 'El horario se eliminó con éxito');
    }
}

