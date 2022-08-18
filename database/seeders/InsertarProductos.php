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
                'coduni' => 1589,
                'image' => 'https://www.ar-racking.com/gestor/recursos/uploads/imagenes/Delegaciones/CHILE/rack-metalico-bodega-santiago.jpg',
                'categoria' => 'perecible',
                'desc' => 'sirve calentarse',
                'sucursal_id' => 1
            ],
            [
                'name' => 'caffe',
                'coduni' => 1589,
                'image' => 'https://www.peru-retail.com/wp-content/uploads/LIDER-G_2.jpg',
                'categoria' => 'perecible',
                'desc' => 'sirve calentarse',
                'sucursal_id' => 2
            ]
        ));
    }
}
