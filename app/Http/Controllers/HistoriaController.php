<?php

namespace App\Http\Controllers;

use App\Models\historia;
use Illuminate\Http\Request;

class HistoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historias = Historia::all();
        return view('admin.historias.index', compact('historias'));
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
     * @param  \App\Models\historia  $historia
     * @return \Illuminate\Http\Response
     */
    public function show(historia $historia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\historia  $historia
     * @return \Illuminate\Http\Response
     */
    public function edit(historia $historia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\historia  $historia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, historia $historia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\historia  $historia
     * @return \Illuminate\Http\Response
     */
    public function destroy(historia $historia)
    {
        //
    }
}
