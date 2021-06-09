<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Articulos;
use Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("home1");
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
        $articulo=Articulos::getArticuloById($request->id);

        if($articulo->descuento>0){
            $precio=round($articulo->precio-($articulo->precio*$articulo->descuento/100),2);
        }else{
            $precio=$articulo->precio;
        }
        Cart::add(array(
            'id' => $articulo->id,
            'name' => $articulo->nombre ,
            'price' => $precio,
            'quantity' => $request->cantidad,
            'descr'=>$articulo->descripcion
        ));
        return redirect('carrito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // si debes actualizar solo la cantidad de producto
        Cart::update(456, array(
            'quantity' => 2, // si la cantidad actual del producto es 1, se sumarán 2 items dando como resultado 3
        ));

        // Tambien puedes reducir la cantidad de un item especifico:
        Cart::update(456, array(
            'quantity' => -1, // a la cantidad actual, se le restará uno
        ));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Cart::remove($request->input('id'));
        return back();
    }
    /**
     * Clean the cart storage
     *
     * @return void
     */
    public function clear(){
        Cart::clear();
        return back();
    }
}
