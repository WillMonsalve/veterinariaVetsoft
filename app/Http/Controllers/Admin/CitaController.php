<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cita;
use App\Models\Cliente;
use App\Models\Horario;
use App\Models\Servicio;

class CitaController extends Controller
{

    public function __construct()
    {
         $this->middleware('can:admin.citas.index')->only('index');
         $this->middleware('can:admin.citas.create')->only('create', 'store');
         $this->middleware('can:admin.citas.edit')->only('edit', 'update');
         $this->middleware('can:admin.citas.show')->only('show');
         $this->middleware('can:admin.citas.destroy')->only('destroy');
    }


    public function index()
    {
        $citas = Cita::select("citas.*", "clientes.nombre_cliente","servicios.nombre_servicio","horarios.Fecha","horarios.Hora_ini")
        ->join("clientes", "citas.cliente_id","=", "clientes.id")
        ->join("servicios", "citas.servicio_id","=", "servicios.id")
        ->join("horarios", "citas.agenda_id","=", "horarios.id")
        ->get();

        return view('admin.citas.index', compact('citas'));

    }


    public function create()
    {
        $horarios = Horario::where('Estado',1)->get();
        $servicios = Servicio::where('estado',1)->get();
        $cliente = Cliente::where('estado',1)->get();
        return view('admin.citas.create', compact('servicios','cliente','horarios'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'estado' => 'required',
            'agenda_id' => 'required',
            'hora_id' => 'nullable',
            'cliente_id' => 'required',
            'servicio_id' => 'required',
        ]);

        $cita = Cita::create($request->all());

        return redirect()->route('admin.citas.index', $cita)->with('info', 'La cita se registro con exito');;
    }


    public function show(Cita $cita)
    {
        $horarios = Horario::pluck('Fecha','id');
        $hora = Horario::pluck('Hora_ini','id');
        $servicios = Servicio::pluck('nombre_servicio', 'id');
        $cliente = Cliente::pluck('nombre_cliente', 'id');
        return view('admin.citas.show', compact('cita','servicios','cliente','horarios','hora'));
    }


    public function edit(Cita $cita)
    {
        $horarios = Horario::pluck('Fecha','id');
        $hora = Horario::pluck('Hora_ini','id');
        $servicios = Servicio::pluck('nombre_servicio', 'id');
        $cliente = Cliente::pluck('nombre_cliente', 'id');

        return view('admin.citas.edit', compact('cita','servicios','cliente','horarios','hora'));
    }


    public function update(Request $request, Cita $cita)
    {
        $request->validate([
            'estado' => 'required',
            'agenda_id' => 'required',
            'hora_id' => 'required',
            'servicio_id' => 'nullable',
            'cliente_id' => 'nullable',
        ]);

        $cita->update($request->all());

        return redirect()->route('admin.citas.index', $cita)->with('info', 'La Cita Se actualizo con éxito');
    }


    public function destroy(Cita $cita)
    {
        $cita->delete();

        return redirect()->route('admin.citas.index')->with('info', 'La cita se elimino con éxito');;
    }
}
