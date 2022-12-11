<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicio;
use Spatie\Permission\Models\Role;
use App\Models\Horario;

class HorarioController extends Controller
{
    public function __construct()
    {
         $this->middleware('can:admin.horarios.index')->only('index');
         $this->middleware('can:admin.horarios.create')->only('create', 'store');
         $this->middleware('can:admin.horarios.edit')->only('edit', 'update');
    }

    public function index()
    {
        $horarios = Horario::select("horarios.*","servicios.nombre_servicio","roles.name")
        ->join("servicios", "horarios.id_servi","=", "servicios.id")
        ->join("roles", "horarios.rol","=", "roles.id")
        ->get();

        return view('admin.horarios.index', compact('horarios'));
    }

    public function create()
    {
        $servicios = Servicio::where('estado',1)->get();
        $roles = Role::all();

        return view('admin.horarios.create',compact('roles','servicios'));
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

        $horarios = Horario::create($request->all());

        return redirect()->route('admin.horarios.index', $horarios)->with('info', 'el horario se creo con exito');
    }

    public function edit(Horario $horario)
    {

        $servicios = Servicio::pluck('nombre_servicio', 'id');
        $roles = Role::pluck('name', 'id');

        return view('admin.horarios.edit', compact('horario','servicios','roles'));
    }


    public function update(Request $request, Horario $horario)
    {
        $request->validate([
            'Estado' => 'nullable',
            'Fecha'=>'required',
            'Hora_ini' => 'required',
            'Hora_fin'=>'required',
            'id_user'=>'nullable',
            'id_servi' => 'nullable',
        ]);

        $horario->update($request->all());

        return redirect()->route('admin.horarios.index', $horario)->with('info', 'Se actualizo el horario con exito');
    }



    public function destroy(Horario $horario)
    {
        $horario->delete();

        return redirect()->route('admin.horarios.index')->with('info', 'El horario se eliminó con éxito');
    }



 }

