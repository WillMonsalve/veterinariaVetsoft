<?php

namespace App\Http\Controllers;

use App\Models\detalle_historia;
use Illuminate\Http\Request;

class DetalleHistoriaController extends Controller
{
    
    public function index()
    {
        $detalle_historias = Detalle_Historia::all();
        return view('admin.detalle_historias.index', compact('detalle_historias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detalle_historia  $detalle_historia
     * @return \Illuminate\Http\Response
     */
    public function show(detalle_historia $detalle_historia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detalle_historia  $detalle_historia
     * @return \Illuminate\Http\Response
     */
    public function edit(detalle_historia $detalle_historia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detalle_historia  $detalle_historia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detalle_historia $detalle_historia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detalle_historia  $detalle_historia
     * @return \Illuminate\Http\Response
     */
    public function destroy(detalle_historia $detalle_historia)
    {
        //
    }
}
