<?php

namespace App\Http\Controllers;

use App\Aviso;
use Illuminate\Http\Request;
use App\Http\Requests\AvisoStoreRequest;
use App\Http\Requests\AvisoUpdateRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Image;

class AvisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            $avisos = Aviso::orderBy('id','DESC')->paginate(3);
            return view('loyout.inicio', compact('avisos'));
    }
    public function detalle(Request $request)
    {
    		$publicado = $request['publicado'];
            $avisos = Aviso::orderBy('id','DESC')
            	->where('aviso_titulo', 'LIKE', '%'.$publicado.'%')
            	->paginate(8);
            return view('admin.detalleaviso', ['publicado' => $publicado], compact('avisos'));
    }

    /**
     * Show the form for creating a new resource.
     * te descompuse algo de aqui que fue ma? :(
     ES que tengo dos mira
     
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.altaaviso');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //return $request;
        if($request->hasFile('aviso_image'))
        {
            $file = $request->file('aviso_image');
            $ruta = public_path().'/imagesAviso';
            $name = time().$file->getClientOriginalName();
            $file->move($ruta, $name);            
        }

        $aviso = new Aviso();
        $aviso->aviso_titulo = $request->input('aviso_titulo');
        $aviso->aviso_link = $request->input('aviso_link');
        $aviso->aviso_image = $name;
        $aviso->save();
        return redirect()->route("aviso.publicado");
        



       }

       public function publicado()
       {
        $avisos = Aviso::orderBy('id','DESC')->paginate(1);
        return view('admin.mostraraviso', compact('avisos'));
       }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aviso  $aviso
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aviso = Aviso::find($id);
        return view('admin.contenidoaviso', compact('aviso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aviso  $aviso
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $avisospub = Aviso::find($id);
        return view('admin.editaraviso', compact('avisospub'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aviso  $aviso
     * @return \Illuminate\Http\Response
     */
    public function update(AvisoUpdateRequest $request, $id)
    {
        $aviso =  Aviso::find($id);
         if($request->hasFile('aviso_image'))
        {
            $file = $request->file('aviso_image');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/imagesAviso/', $name);
            
        }

   
        $aviso->aviso_titulo = $request->input('aviso_titulo');
        $aviso->aviso_link = $request->input('aviso_link');
        $aviso->aviso_image = $name;
        $aviso->save();
        return redirect()->route("aviso.publicado");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aviso  $aviso
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $avisos = Aviso::find($id);
        $avisos->delete();
        return redirect()->route("avisos");
    }
}
