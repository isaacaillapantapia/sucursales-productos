<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(array(
            [
                'name' => 'caffe',                
                'image' => 'https://www.ar-racking.com/gestor/recursos/uploads/imagenes/Delegaciones/CHILE/rack-metalico-bodega-santiago.jpg',
                'coduni' => 15892568,
                'categoria' => 'perecible',
                'desc' => 'sirve calentarse',
                'cantidad' => 15,
                'precio' => 1500,
                'sucursal_id' => 1
            ],
            [
                'name' => 'caffe',                
                'image' => 'https://www.ar-racking.com/gestor/recursos/uploads/imagenes/Delegaciones/CHILE/rack-metalico-bodega-santiago.jpg',
                'coduni' => 15892568,
                'categoria' => 'perecible',
                'desc' => 'sirve calentarse',
                'cantidad' => 15,
                'precio' => 1500,
                'sucursal_id' => 1
            ]
        ));
    }
}
