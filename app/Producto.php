<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{   
    protected $table='productos';
    protected $fillable=["nombre_producto","precio","cantidad","numero_lote","fecha_caducidad","proveedor_id"];
    
    public function proveedor(){
        return $this->belongsTo(Proveedor::class);
    }
}
