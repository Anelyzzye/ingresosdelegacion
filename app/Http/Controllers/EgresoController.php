<?php

namespace App\Http\Controllers;

use App\Egreso;
use Illuminate\Http\Request;

class EgresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.altaegresos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $egreso = new Egreso();
        $egreso->fechaegresos = $request->input("fechaegresos");
        $egreso->motivo = $request->input("motivo");
        $egreso->cantidad = $request->input("cantidad");
        $egreso->created_at = now()->toDateString();
        $egreso->updated_at = now()->toDateString();
        $egreso->save();
        return "Registro Exitoso";

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Egreso  $egreso
     * @return \Illuminate\Http\Response
     */
    public function show(Egreso $egreso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Egreso  $egreso
     * @return \Illuminate\Http\Response
     */
    public function edit(Egreso $egreso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Egreso  $egreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Egreso $egreso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Egreso  $egreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Egreso $egreso)
    {
        //
    }
}
