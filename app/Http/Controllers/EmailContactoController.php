<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;
use App\Mail\MessageReceived;
use App\Ciudadano;
use Illuminate\Support\Facades\DB;
use App\Mail\MensajeReceteo;


class EmailContactoController extends Controller
{
    public function store()
    {
    	$mensaje = request()->validate([
    		'nombre' => 'required',
    		'emailcomenta' => 'required|email',
    		'asunto' => 'required',
    		'mensaje' => 'required'
    	]);

    	Mail::to('oficialdelegacionsanpedro@gmail.com')->send(new MessageReceived($mensaje));

        echo "<script>
                    alert('Ha sido enviado su comentario');
            </script>";
        return back();	
    }

    public function restablecer(Request $request)
    {
        $mensaje = request()->validate([
            'email' => 'required',
        ]);

        $email = $request->input('email');
        $consulta = Ciudadano::where('email', '=', $email)
            ->get();
            $enc = DB::select("SELECT id, email FROM ciudadanos WHERE email = '$email'");

        
        if($consulta->count() == 0)
        {
            return back();
        }else {
            foreach($enc as $encs){
            $datos['dest'] = $request['email'];
            $cad='abcdefghijklmnopqrstuvwxyz0123456789/*_';
            $datos['password'] = substr(str_shuffle($cad),5,10);
            $pw_enc = $datos['password'];

            DB::select("UPDATE ciudadanos SET password = '$pw_enc' WHERE id=$encs->id");
            Mail::to($datos['dest'])->send(new MensajeReceteo($mensaje, $pw_enc));
            echo "<script>
                    alert('Su contraseña ha sido cambiada, favor de revisar su email');
            </script>";
        return back();  
            }
        }  


    }
}
