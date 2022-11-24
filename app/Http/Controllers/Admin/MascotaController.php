<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
   
    public function index()
    {
        $mascotas = Mascota::all();
        return view('admin.mascotas.index', compact('mascotas'));
    }

    
    public function create()
    {
        return view('admin.mascotas.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'raza' => 'required',
            'color' => 'required',
            'peso' => 'required',
            'especie' => 'required',
            'edad' => 'required',
            'sexo' => 'required',
        ]);

        $mascota = Mascota::create($request->all());

        return redirect()->route('admin.mascotas.index', $mascota)->with('info', 'La mascota se creo con exito');
    }

    
    public function show(Mascota $mascota)
    {
        return view('admin.mascotas.show', compact('mascota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mascota $mascota)
    {
        return view('admin.mascotas.edit', compact('mascota'));
    }

    
    public function update(Request $request, Mascota $mascota)
    {
        $request->validate([
            'nombre' => 'required',
            'raza' => 'required',
            'color' => 'required',
            'peso' => 'required',
            'especie' => 'required',
            'edad' => 'required',
            'sexo' => 'required',
        ]);

        $mascota->update($request->all());

        return redirect()->route('admin.mascotas.index', $mascota)->with('info', 'La mascota se actualizo con exito');
    }

   
    public function destroy(Mascota $mascota)
    {
        $mascota->delete();
        return redirect()->route('admin.mascotas.index')->with('info', 'La mascota se elimino con exito');
    }
}
