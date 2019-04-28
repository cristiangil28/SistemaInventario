<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table='proveedores';
    protected $fillable=['nombre','telefono'];

    public function productos(){
        return $this->hasMany(Producto::class);
    }
}
