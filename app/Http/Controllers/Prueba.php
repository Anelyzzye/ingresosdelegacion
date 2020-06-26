<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Prueba extends Controller
{
    public function show(){
    	return view('admin.mostrarddirectorio');
    }
}
