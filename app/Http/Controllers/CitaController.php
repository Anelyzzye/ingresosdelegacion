<?php

namespace App\Http\Controllers;


use App\Ciudadano;
use App\tipoCiudadano;
use App\tipotramite;
use App\PorcentajeDonado;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\CitasStroreRequest;
use App\Cita;
use App\User;
use Carbon\Carbon as Fecha;
use Barryvdh\DomPDF\Facade as PDF;
class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cita = Cita::select(['users.name AS nombre', 
                      'users.apellidopat AS app',
                      'users.apellidomat AS apm',
                      'citas.dia AS dia',
                      'citas.hora AS hora',
                      'tipotramites.nombretipotramite AS tramite'
                      ])->join('users', 'users.id', '=', 'citas.user_id')
                        ->join('tipotramites', 'tipotramites.id', '=', 'citas.tipotramites_id')
                        ->latest('citas.created_at')
                        ->first();
        //return $cita;
        return view('loyout.infocita', compact('cita'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tramites = tipotramite::all();
        $ciudadano = User::select(['id','name', 'apellidopat', 'apellidomat'])
                              ->get();
       
        return view('loyout.altacitas', compact('tramites', 'ciudadano'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $cita = new Cita();
        $cita->user_id = $request->input("user_id");
        $cita->dia = Fecha::parse($request->input('dia'));
        $cita->hora = Fecha::parse($request->input("hora"))->toTimeString();
        $cita->tipotramites_id = $request->input("tipotramites_id");
        $cita->created_at = now();
        $cita->updated_at = now()->toDateString();

        $consulta = Cita::where('dia', '=', $cita->dia)
            ->where('hora', '=',$cita->hora)
            ->get();

            if($consulta->count() == 0){
                $cita->save();
                return redirect()->route('cita.index');
            }else{
                
                return back()->with('msj','Ha tardado en generar su cita, la fecha y horario han sido ocupadas, eliga un nuevo horario');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
         $fecha = $request['fecha'];
        $cita = Cita::select(['citas.id AS id', 'users.name AS nombre', 
                      'users.apellidopat AS app',
                      'users.apellidomat AS apm',
                      'citas.dia AS dia',
                      'citas.hora AS hora',
                      'tipotramites.nombretipotramite AS tramite'
                      ])->join('users', 'users.id', '=', 'citas.user_id')
                        ->join('tipotramites', 'tipotramites.id', '=', 'citas.tipotramites_id')
                        ->where('dia', '=', $fecha)
                        ->orderBy('dia', 'DESC')
                        ->get();

                    
        //return $cita;
        return view('admin.mostrarcita',['fecha' => $fecha], compact('cita'));
    
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
         $dinero = Cita::findOrFail($id);
        $users = User::select(['users.name', 
                      'users.apellidopat',
                      'users.apellidomat',
                       'tipotramites.nombretipotramite AS tramite',
                       'tipotramites.costo AS costo'
                        ])->join('citas', 'users.id', '=', 'citas.user_id')
                         ->join('tipotramites', 'tipotramites.id', '=', 'citas.tipotramites_id')
                        ->where('citas.id', '=', $id)
                        ->get();
                      // return $users;

           $cant= $request['tipotr_id'];              
       $tipotramite = tipotramite::all(); 
       $eltramite = tipotramite::select(['costo'])
                    ->where('id', '=',$cant)
                    ->get();
        $porcentaje = PorcentajeDonado::all(); 
        return view('admin.altaingresos', compact("dinero", 'tipotramite', "users", 'eltramite'))->with(["porcentaje" => $porcentaje]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cita $cita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /**$nocita = Ciudadano::findOrfail($id);
        $nocita->delete();
        return redirect()->route("citas");**/
    }

    public function exportPdf()
    {
       /** $citapdf = Ciudadano::get();
        $pdf = PDF::loadView('admin.citaspdf', compact('citapdf'));

        return $pdf->download('reportecitas.pdf');*/
    }

   
}
