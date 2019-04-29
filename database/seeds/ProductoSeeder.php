<?php

use Illuminate\Database\Seeder;
use App\Producto;
class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::truncate();

        Producto::create([
            'nombre_producto'=>'Portátil acer',
            'precio'=>600000,
            'cantidad'=>20,
            'numero_lote'=>'54887',
            'fecha_caducidad'=>'2019-05-10',
            'proveedor_id'=>1
        ]);
    }
}
