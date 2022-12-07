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

        $citas = DB::table('citas')->count();


        return view('admin.index', compact('citas'));

    }
}
