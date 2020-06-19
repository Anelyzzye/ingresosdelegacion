<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Auth;
use App\Ciudadano;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Session;
use Crypt;

class Login extends Controller
{
    public function valida(Request $request){
    	$email = $request->input('email');
    	$pass = $request->input('password');

    	$consulta = Ciudadano::where('email', '=', $email)
    		->where('password', '=',$pass)
    		->get();

    	//echo $consulta->count();

    	if($consulta->count() == 0){
    		return redirect()->route('tramites.sitio');
    	 }else{
    	 	
    		$request->session()->put('session_id',$consulta[0]->id);
    		$request->session()->put('session_name',$consulta[0]->nombres);
    		$request->session()->put('session_tipo',$consulta[0]->tipociudadanos_id);

    		$session_id = $request->session()->get('session_id');
    		$session_name = $request->session()->get('session_name');
    		$session_tipo = $request->session()->get('session_tipo');


    		if ($session_tipo == '3') {
    			return redirect()->route('cita.show');
    		}
    		else if($session_tipo == '2'){
    			return view('loyout.tramites');
    		}
    		else{
                echo "<script>
                    alert('Correo no encontrado');
                  </script>";
    			return back();
    		}
    	    
    	}
    }

    public function enviar(Request $request)
    {
        $datos = $this->validate(request(),[

            'email' => 'required',
        ]);

        $enc = DB::select("SELECT id, email FROM ciudadanos WHERE tipociudadanos_id = 1");
        $e=0;

       foreach($enc as $encs){

            if($encs->email == $request['email']){
            //echo "Correo Encontrado";

            $datos['dest'] = $request['email'];
            $cad='abcdefghijklmnopqrstuvwxyz0123456789/*_';
            $datos['password'] = substr(str_shuffle($cad),5,10);
            $pw_enc = $datos['password'];
            $datos['nombres']=$request['nombres']; 

            DB::select("UPDATE ciudadanos SET password = '$pw_enc' WHERE id=$encs->id");

            Mail::send('loyout.emailrecuperar',['datos'=>$datos],
            function($m) use($datos){
                $m->to($datos['dest'])
                ->subject('Restablecimiento de contraseña');
            });

            echo "<script>alert('Tu contraseña ha sido enviada, revisa tu correo.');</script>";
            return redirect('registro');
     
            $e = 1;
            exit;
            }
        }

        if ($e!=1) {
            echo "<script>
                    alert('Correo no encontrado');
                  </script>";
            return back();
       }
    }
}
