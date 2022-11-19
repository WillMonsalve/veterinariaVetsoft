<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Agenda;
use Illuminate\Http\Request;
use App\Models\Agenda;


class AgendaController extends Controller
{
    public function index(){
        $days =[
            'Lunes',
            'Martes',
            'Miercoles',
            'Jueves',
            'Viernes',
            'Sabado',
            'Domingo'
        ];
        $agendas = Agenda::all();

        return view('admin.agendas.edit', compact('days'));
    }

    public function update(Request $request, agenda $agenda)
{
    $request->validate([
        'active' => 'required',
        'morning_start' => 'required',
        'morning_end' => 'required',
        'afternoon_start' => 'required',
        'afternoon_end' => 'required'

    ]);

    $agenda->update($request->all());

    return redirect()->route('admin.agendas.index', $agenda)->with('info', 'El agendas se actualizo con exito');
}
public function destroy(Agenda $agenda)
{
    $agenda->delete();

    return redirect()->route('admin.agendas.index')->with('info', 'El agendas se elimino con exito');;
}


}
