<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factura;
class FacturaController extends Controller
{
    public function index()
    {   
    
        $facturas=Factura::orderBy('id','DESC')->paginate(3);
        //return view('Producto.index',compact('productos')); 
        return view('Factura.index')->with('facturas', $facturas);
    }
}
