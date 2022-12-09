<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use App\Models\Agenda;


class AgendaController extends Controller
{
    public function __construct()
   {        
        $this->middleware('can:admin.agendas.index')->only('index');
        $this->middleware('can:admin.agendas.create')->only('create', 'strore');
        $this->middleware('can:admin.agendas.destroy')->only('destroy');
        $this->middleware('can:admin.agendas.show')->only('show');
   }

    public function index()
    {
        $agendas = Agenda::select("agendas.*", "roles.name")
        ->join("roles", "agendas.user_id","=", "roles.id")
        ->get();

        return view('admin.agendas.index', compact('agendas'));
    }
    public function create()
    {
        $roles = Role::all();
        return view('admin.agendas.create', compact('roles'));
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
            'roles'=> 'nullable'

        ]);

        $agendas = agenda::create($request->all());

        return redirect()->route('admin.agendas.index', $agendas)->with('info', 'el horario se creo con exito');
    }
    public function show(Agenda $agenda)
    {
       $roles = Role::all();

        return view('admin.agendas.show', compact('roles','agenda'));
    }

    public function destroy(Agenda $agenda)
    {
        $agenda->delete();

        return redirect()->route('admin.agendas.index')->with('info', 'El horario se eliminó con éxito');
    }
}



