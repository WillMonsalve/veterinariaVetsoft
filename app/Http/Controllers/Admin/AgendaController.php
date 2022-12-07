<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
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
        $agendas = Agenda::select("agendas.*", "users.name")
        ->join("users", "agendas.user_id","=", "users.id")
        ->get();
       
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
            'user_id'=> 'nullable'

        ]);

        $agendas = agenda::create($request->all());

        return redirect()->route('admin.agendas.index', $agendas)->with('info', 'el horario se creo con exito');
    }
    public function show(Agenda $agenda)
    {
        $users = User::all();

        return view('admin.agendas.show', compact('users'), compact('agenda'));
    }

    public function destroy(Agenda $agenda)
    {
        $agenda->delete();

        return redirect()->route('admin.agendas.index')->with('info', 'El horario se eliminó con éxito');
    }
}



