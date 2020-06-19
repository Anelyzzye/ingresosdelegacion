<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;
use App\Http\Requests\EventoStoreRequest;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $eventos = Evento::orderBy('id','DESC')->paginate(8);
        return view('loyout.blog', compact('eventos'));
    }

      public function detalle(Request $request)
    {
            $publicadoevento = $request['publicadoevento'];
            $eventos = Evento::orderBy('id','DESC')
                ->where('evento_titulo', 'LIKE', '%'.$publicadoevento.'%')
                ->paginate(4);
            return view('admin.detalleevento', ['publicadoevento' => $publicadoevento], compact('eventos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.altaevento');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventoStoreRequest $request)
    {
    if($request->hasFile('evento_image'))
        {
            $file = $request->file('evento_image');
            $namesimage = time().$file->getClientOriginalName();
            $file->move(public_path().'/imagesEvento/', $namesimage);
            
        }
        $evento = new Evento();
        $evento->evento_titulo = $request->input('evento_titulo');
        $evento->evento_texto = $request->input('evento_texto');
        $evento->evento_fecha = $request->input('evento_fecha');
        $evento->evento_image = $namesimage;
        $evento->save();
        return redirect()->route("eventos");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eventus = Evento::find($id);
        return view('loyout.detalleblog', compact('eventus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eventos = Evento::find($id);
        return view('admin.editarevento', compact('eventos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $eventus =  Evento::find($id);
         if($request->hasFile('evento_image'))
        {
            $file = $request->file('evento_image');
            $namesimage = time().$file->getClientOriginalName();
            $file->move(public_path().'/imagesEvento/', $namesimage);
            
        }
        $evento = new Evento();
        $evento->evento_titulo = $request->input('evento_titulo');
        $evento->evento_texto = $request->input('evento_texto');
        $evento->evento_fecha = $request->input('evento_fecha');
        $evento->evento_image = $namesimage;
        $evento->save();
        return redirect()->route("eventos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $eliminado = Evento::find($id);
        $eliminado->delete();
        return redirect()->route("eventos");
    }
}
