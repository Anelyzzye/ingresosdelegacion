<?php

namespace App\Http\Controllers;

use App\Ingreso;
use App\Ciudadano;
use App\tipoCiudadano;
use App\tipotramite;
use App\PorcentajeDonado;
use App\Cita;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon as Fecha;

class IngresoController extends Controller
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
        $ingreso = Cita::Select(['users.id', 'users.name', 'users.apellidopat', 'users.apellidomat'])
                    ->join('users', 'users.id', '=', 'citas.user_id')
                    ->whereDate('dia', '=', Fecha::now()->format('Y-m-d'))->get();
        $tipotramite = tipotramite::all(); 
        $porcentaje = PorcentajeDonado::all();             
        return view('admin.altaingresos', compact('ingreso', 'tipotramite', 'porcentaje'));
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
     * @param  \App\Igreso  $igreso
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //te marco va
        //oki contesta
        $porcentaje = PorcentajeDonado::findOrFail($id);
        return $porcentaje;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Igreso  $igreso
     * @return \Illuminate\Http\Response
     */
    public function edit(Igreso $igreso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Igreso  $igreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Igreso $igreso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Igreso  $igreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Igreso $igreso)
    {
        //
    }
}
