<?php

namespace App\Http\Controllers;

use App\Ciudadano;
use App\tipoCiudadano;
use App\tipotramite;
use Illuminate\Http\Request;
use App\Http\Requests\CiudadanoStoreRequest;

class CiudadanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $ciudadano = Ciudadano::all();
        return view('admin.mostrarusuario', compact('ciudadano'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $tipociudadano = tipoCiudadano::all();
        $tramites = tipotramite::all();
        return view('admin.altaciudadano', compact('tipociudadano', 'tramites'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CiudadanoStoreRequest $request)
    {
        $ciudadano = new Ciudadano();
        $ciudadano->nombres = $request->input("nombres");
        $ciudadano->apellidopat = $request->input("apellidopat");
        $ciudadano->apellidomat = $request->input("apellidomat");
        $ciudadano->calle = $request->input("calle");
        $ciudadano->numeroext = $request->input("numeroext");
        $ciudadano->numeroint = $request->input("numeroint");
        $ciudadano->cpostal = $request->input("cpostal");
        $ciudadano->colonia = $request->input("colonia");
        $ciudadano->email = $request->input("email");
        $ciudadano->password = $request->input("password");
        $ciudadano->status = $request->input("status");
        $ciudadano->tipociudadanos_id = $request->input("tipociudadanos_id");
        $ciudadano->created_at = now()->toDateString();
        $ciudadano->updated_at = now()->toDateString();
        $ciudadano->save();
        return redirect()->route("ciudadano.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ciudadano  $ciudadano
     * @return \Illuminate\Http\Response
     */
    public function show(Ciudadano $ciudadano)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ciudadano  $ciudadano
     * @return \Illuminate\Http\Response
     */
    public function edit(Ciudadano $ciudadano)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ciudadano  $ciudadano
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ciudadano $ciudadano)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ciudadano  $ciudadano
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ciudadano $ciudadano)
    {
        //
    }

    
}
