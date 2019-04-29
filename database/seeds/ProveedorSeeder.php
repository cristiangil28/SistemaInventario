<?php

use Illuminate\Database\Seeder;
use App\Proveedor;
class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proveedor::truncate();
        Proveedor::create([
            'nombre'=>'GOOGLE',
            'telefono'=>'988788'
        ]);
    }
}
