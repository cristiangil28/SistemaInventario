<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table="facturas";

    protected $fillable=['user_id','producto_id','descripcion','precio','cantidad','total'];

    public function usuario(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function productos(){
        return $this->hasMany(Producto::class,'id');
    }
}
