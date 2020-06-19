<?php

namespace App\Http\Controllers;

use App\Paypaltramite;
use App\tipotramite;
use Illuminate\Http\Request;

class PaypaltramiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tramitespaypal = tipotramite::all();
        return view('paypal.catalogotramites',compact('tramitespaypal'));
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
     * @param  \App\Paypaltramite  $paypaltramite
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $tram = tipotramite::findOrFail($id);
        
        return view('paypal.detallecatalogo',compact("tram"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paypaltramite  $paypaltramite
     * @return \Illuminate\Http\Response
     */
    public function edit(Paypaltramite $paypaltramite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paypaltramite  $paypaltramite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paypaltramite $paypaltramite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paypaltramite  $paypaltramite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paypaltramite $paypaltramite)
    {
        //
    }
}
