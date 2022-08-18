<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Sucursal;

class ProductosController extends Controller
{
    public function index($id){

        $sucursal = Sucursal::where('id', $id)->get();

        $productos= producto::where('sucursal_id', $id)->get();

        return view('productos.listado',[
            'sucursal' => $sucursal,
            'productos' => $productos
        ]);

    }
    public function create(){
        return view('productos.agregar');
    }



    public function search($search=null){
        if(is_null($search)){
            $search = \Request::get('search');
        }

        $productos=producto::where('name', 'LIKE', '%' .$search. '%')->get();

        return view('productos.listado')
        ->with(
            array(
                'productos' => $productos,
            'search' => $search
            )
            );   
            
    }

    

    public function get(){
        $productos = Producto::get();
        return view('productos.agregar',[
            'productos' => $productos
        ]);
    }

    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'image' => 'required',
            'coduni' => 'required',
            'categoria' => 'required',
            'desc' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
            'sucursal_id' => 'required',

        ]);
        

        $producto = new Producto();
        $producto->name = $request->name;
        $producto->image = $request->image;
        $producto->coduni = $request->coduni;
        $producto->categoria = $request->categoria;
        $producto->desc = $request->desc;
        $producto->cantidad = $request->cantidad;
        $producto->precio = $request->precio;
        $producto->sucursal_id = $request->sucursal_id;
        $producto->save();

        $productos = Producto::get();

        //dd($productos);

        return view('productos.listado',[
            'productos' => $producto
        ]);

    }




}
