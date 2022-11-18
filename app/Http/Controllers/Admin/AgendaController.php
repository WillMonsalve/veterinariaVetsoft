<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\agenda;

class AgendaController extends Controller
{
    public function edit(){
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
}
