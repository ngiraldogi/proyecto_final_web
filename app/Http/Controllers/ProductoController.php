<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        /*return view ('Producto.index'); se apunta a home porque es quien gestionara los productos*/
        return view('home')->with('producto',producto::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*return view ('Producto.create');*/
        return view ('productos.crear_productos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $productos = new producto();
         //no se pone el id del producto porque es autoincrementable
        $productos-> nombre = $request->nom; 
        $productos ->descripcion = $request ->des;
        $productos ->stock = $request ->cant;
        $productos ->precio = $request ->pre;
        $productos ->imagen = $request ->img;
        $productos ->categoria = $request ->cat;
        $productos ->save();

        return redirect()->route('producto.index'); 
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
       /* return view ('producto.edit');*/
        $productos = producto::find($id);
        return view('productos.editar_productos')->with('producto',$productos);
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
       $productos = producto::find($id);
       $productos-> nombre = $request->nom; 
       $productos ->descripcion = $request ->des;
       $productos ->stock = $request ->cant;
       $productos ->precio = $request ->pre;
       $productos ->imagen = $request ->img;
       $productos ->categoria = $request ->cat;
       $productos ->save();

       return redirect()->route('producto.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productos = producto::find($id);
        $productos->delete();
        return redirect()->route('producto.index');
    }
}
