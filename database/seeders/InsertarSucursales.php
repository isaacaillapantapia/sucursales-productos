<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarSucursales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursales')->insert(array(
            [
                'name' => 'caffe',
                'desc' => 'sirve calentarse',                
                'name_sucursal' => 'Cerro Navia'
            ],
            [
                'name' => 'tea',
                'desc' => 'sirve calentarse',
                'name_sucursal' => 'Maipu'
            ]
        ));
    }
}
