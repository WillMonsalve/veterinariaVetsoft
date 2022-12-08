<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Models\Cita;
use App\Models\Servicio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $citas = DB::table('horarios')->count();
        $citasEnero = DB::table('horarios')->whereMonth('Fecha', '=', '01')->count();
        $citasFebrero = DB::table('horarios')->whereMonth('Fecha', '=', '02')->count();
        $citasMarzo = DB::table('horarios')->whereMonth('Fecha', '=', '03')->count();
        $citasAbril = DB::table('horarios')->whereMonth('Fecha', '=', '04')->count();
        $citasMayo = DB::table('horarios')->whereMonth('Fecha', '=', '05')->count();
        $citasJunio = DB::table('horarios')->whereMonth('Fecha', '=', '06')->count();
        $citasJulio = DB::table('horarios')->whereMonth('Fecha', '=', '07')->count();
        $citasAgosto = DB::table('horarios')->whereMonth('Fecha', '=', '08')->count();
        $citasSeptiembre = DB::table('horarios')->whereMonth('Fecha', '=', '09')->count();
        $citasOctubre = DB::table('horarios')->whereMonth('Fecha', '=', '10')->count();
        $citasNoviembre = DB::table('horarios')->whereMonth('Fecha', '=', '11')->count();
        $citasDiciembre = DB::table('horarios')->whereMonth('Fecha', '=', '12')->count();





        return view('admin.index', compact('citas','citasEnero','citasFebrero','citasMarzo','citasAbril','citasMayo','citasJunio','citasJulio','citasAgosto',
        'citasSeptiembre','citasOctubre','citasNoviembre','citasDiciembre',));

    }
}
