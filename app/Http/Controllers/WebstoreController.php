<?php

namespace App\Http\Controllers;

use App\Product;
use App\Invoice;
use App\Suborder;
use Gloudemans\Shoppingcart\Facades\Cart;

class WebstoreController extends Controller
{
    public function index()
    {
        # We pass all the products from the database into
        # the $products variable, which is an array
        $products = Product::all();

        # We use the home view for the tutorial, but you could
        # use other views too. Home will be our webstore view
        return view('paypal.catalogotramites',compact('products'));
    }
     public function checar()
    {
        # We pass all the products from the database into
        # the $products variable, which is an array
        

        # We use the home view for the tutorial, but you could
        # use other views too. Home will be our webstore view
        return view('paypal.checar');
    }

    # Our function for adding a certain product to the cart
    public function addToCart(Product $product)
    {
        Cart::add($product->id, $product->name, 1, $product->price);
        return redirect('/tramites');
    }

    # Our function for removing a certain product from the cart
    public function removeProductFromCart($productId)
    {
        Cart::remove($productId);
        return redirect('/tramites');
    }

    # Our function for clearing all items from our cart
    public function destroyCart()
    {
        Cart::destroy();
        return redirect('/tramites');
    }

 public function addToCarts(Product $product)
    {
        Cart::add($product->id, $product->name, 1, $product->price);
        return redirect('/checar');
    }
     public function Ventas()
    {
         $reportes = Suborder::all();

        # We use the home view for the tutorial, but you could
        # use other views too. Home will be our webstore view
        return view('admin.ventas',compact('reportes'));
    }



}
