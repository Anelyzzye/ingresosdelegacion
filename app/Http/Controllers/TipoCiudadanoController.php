<?php

namespace App\Http\Controllers;

use App\tipoCiudadano;
use Illuminate\Http\Request;
use App\Http\Requests\tipoCiudadanoStoreRequest;

class TipoCiudadanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposciudadanos = tipoCiudadano::all();
        return view('admin.mostrartiposciudadano', compact("tiposciudadanos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.altatipociudadano');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo = new TipoCiudadano();
        $tipo->tipociudadano = $request->input("tipociudadano");
        $tipo->save();
        return redirect()->route("tipociudadano.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tipoCiudadano  $tipoCiudadano
     * @return \Illuminate\Http\Response
     */
    public function show(tipoCiudadano $tipoCiudadano)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tipoCiudadano  $tipoCiudadano
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipociud = tipoCiudadano::findOrFail($id);
        return view('admin.editartipociudadano', compact("tipociud"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tipoCiudadano  $tipoCiudadano
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tipotram = tipoCiudadano::find($id);
        $tipotram->tipociudadano = $request->input("tipociudadano");
        $tipotram->save();
        return redirect()->route("tipociudadano.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tipoCiudadano  $tipoCiudadano
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipociud = tipoCiudadano::findOrFail($id);
        $tipociud->delete();
        return redirect()->route("tipociudadano.index");  
    }
}
