<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\tipotramite;
use App\Paypaltramite;

use Session;
use App\Http\Controllers\Redirect;
use Illuminate\Http\Request;

class PaypalcarritoController extends Controller
{
    //variable del carrito
    public function agregacarrito()
    {
    	if(!Session::has('cart'))
    		return view('paypal.compratramites', ['products' => null]);
        
        $oldCart = Session::get('cart');
        $cart = new Paypaltramite($oldCart);
        return view('paypal.compratramites', [
            'carro' => $cart,
            'products' => $cart->items,
            'totalPrecio' => $cart->totalPrecio 
            ]);

    }
   //Accion en el botor comprar
   public function tramiteagregado(Request $request, $id)
   {
   	 	$product = tipotramite::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Paypaltramite($oldCart);
        $cart->add($product, $product->id);
        
        $request->session()->put('cart', $cart);

        $notificacion = array(
            'message' => $product->nombretipotramite.' añadido al carro de compras', 
            'alert-type' => 'success'
        );

        return back()->with($notificacion);
        
   }

     public function removertramitecarro($id)
    {
        $product = tipotramite::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Paypaltramite($oldCart);
        $cart->removeaitem($id);

        Session::put('cart', $cart);

        $notificacion = array(
            'message' => $product->titulo.' ha sido reducido en 1', 
            'alert-type' => 'warning'
        );

        return back()->with($notificacion);
    }

}
