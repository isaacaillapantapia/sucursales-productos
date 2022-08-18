<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Sucursal;

class SucursalesController extends Controller
{
    public function index(){
        $sucursales = Sucursal::get();

        //dd($sucursales);

        return view('sucursales.listado',[
            'sucursales' => $sucursales

        ]);
    }





    
    public function create(){
        return view('sucursales.agregar');
    }
    
    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'desc' => 'required',
            'image' => 'required',
            'name_sucursal' => 'required'
        ]);

        $imagen = $request->file('image');

        if($imagen){
            $imagen_path = time()."-".$imagen->getClientOriginalName();
            \Storage::disk('imagenes')->put($imagen_path, \File::get($imagen));
        }

        $sucursal = new Sucursal();
        $sucursal->name = $request->name;
        $sucursal->desc = $request->desc;
        $sucursal->image = $imagen_path;
        $sucursal->name_sucursal = $request->name_sucursal;
        $sucursal->save();

        $sucursales = Sucursal::get();

        //dd($sucursales);

        return view('sucursales.listado',[
            'sucursales' => $sucursales

        ]);
    }
    public function getImagen($filename){
        $file = \Storage::disk('imagenes')->get($filename);
        return new Response($file, 200);
    }
}
