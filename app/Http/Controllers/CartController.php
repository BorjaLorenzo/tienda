<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Articulos;
use Cart;

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
        $idUsuario=session('id');
        Cart::add(array(
            'id' => $request->id ? $request->id : '1', // inique row ID
            'name' => $request->name ? $request->name : 'example',
            'price' => $request->price ? $request->price : 20.20,
            'quantity' => $request->quantity ? $request->quantity : 1,
            'attributes' => array(
                'color' => $request->color ? $request->color : 'green',
                'size' => $request->size ? $request->size : 'Big',
            )
        ));
        return back();
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
    public function destroy($cart)
    {
        Cart::remove($cart);
        return back();
    }
}
