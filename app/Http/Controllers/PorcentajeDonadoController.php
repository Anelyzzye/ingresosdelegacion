<?php

namespace App\Http\Controllers;

use App\PorcentajeDonado;
use Illuminate\Http\Request;
use App\Http\Requests\PorcentajeStoreRequest;
use App\Http\Requests\CitasStroreRequest;
use Barryvdh\DomPDF\Facade as PDF;



class PorcentajeDonadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Obtengo el input
       $concepto = $request['concepto'];
       //hago mi consuta
       $donacion = PorcentajeDonado::orderBy('id', 'DESC')
                ->where('concepto', 'LIKE', '%'.$concepto.'%')
                ->paginate(8);
                //Retorno a la vista
       return view('admin.mostrardonacion', ['concepto' => $concepto], compact('donacion'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.altadonacion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PorcentajeStoreRequest $request)
    {
        $donacion = new PorcentajeDonado();
        $donacion->concepto = $request->input("concepto");
        $donacion->porcentaje = $request->input("porcentaje");
        $donacion->save();
        return redirect()->route("donacion");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PorcentajeDonado  $porcentajeDonado
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donados = PorcentajeDonado::find($id);
        return view('admin.contenidodonados', compact("donados"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PorcentajeDonado  $porcentajeDonado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donacion = PorcentajeDonado::findOrFail($id);
        return view('admin.editardonacion', compact("donacion"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PorcentajeDonado  $porcentajeDonado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $donado = PorcentajeDonado::find($id);
        $donado->concepto = $request->input("concepto");
        $donado->porcentaje = $request->input("porcentaje");
        $donado->save();
        return redirect()->route("donacion");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PorcentajeDonado  $porcentajeDonado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donada = PorcentajeDonado::findOrFail($id);
        $donada->delete();
        return redirect()->route("donacion");
    }

    
}
