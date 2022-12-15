<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetalleHistoria;
use Illuminate\Http\Request;
use App\Models\Historia;

class DetalleController extends Controller
{
    
    public function index()
    {
        $detalle = DetalleHistoria::select('id', 'historia_id', 'descripcion', 'created_at')->get();
        return view('admin.detalles.index', compact('detalle'));
       
    }

    
    public function create()
    {
        $historias = Historia::select('id', 'nombre')->get();
        return view('admin.detalles.create', compact('historias'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'historia_id' => 'required',
            'descripcion' => 'required',
        ]);
        
        $detalle = DetalleHistoria::create($request->all());
        
        return redirect()->route('admin.detalles.index', $detalle)->with('info', 'El detalle se creo con éxito');
    }

    
    public function show(DetalleHistoria $detalle)
    {
        $historia = Historia::select('id', 'nombre')->get();
        $detalle = DetalleHistoria::select('id', 'historia_id', 'descripcion', 'created_at')->get();
        return view('admin.detalles.show', compact('detalle', 'historia'));
        
    }

    
    public function edit(DetalleHistoria $detalle)
    {
        $historias = Historia::select('id', 'nombre')->get();
        return view('admin.detalles.edit', compact('detalle', 'historias'));
    }

    
    public function update(Request $request, DetalleHistoria $detalle)
    {
        $request->validate([
            'historia_id' => 'required',
            'descripcion' => 'required',
        ]);
        
        $detalle->update($request->all());
        
        return redirect()->route('admin.detalles.index', $detalle)->with('info', 'El detalle se actualizo con éxito');
    }

    
    public function destroy(DetalleHistoria $detalle)
    {
        $detalle->delete();
        
        return redirect()->route('admin.detalles.index')->with('info', 'El detalle se elimino con éxito');
    }
}