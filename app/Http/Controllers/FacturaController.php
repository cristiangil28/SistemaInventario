<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factura;
use App\Producto;
class FacturaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function index()
    {   
    
        $facturas=Factura::orderBy('id','DESC')->paginate(10);
        //return view('Producto.index',compact('productos')); 
        return view('Factura.index',compact('facturas'));
    }
    public function edit($id)
    {   
        $producto=Producto::find($id);
        return view('Factura.create',compact('producto'));
    }

    public function update(Request $request,$id)
    {
        $producto=Producto::find($id);
        $cantidad_actual=$producto->cantidad;
        $cantidad_r=$request->cantida;
        if($cantidad_r>$cantidad_actual){
            return redirect()->route('producto.index')->with('success','no se puede realizar la compra porque la cantidad supera lo que hay en bodega');
        }else{
        $cantidad_n=$cantidad_actual- $cantidad_r;
        $producto->cantidad=$cantidad_n;
        $producto->save();
        Factura::create($request->all());
        return redirect()->route('factura.index')->with('success','Registro creado satisfactoriamente');
        }
        
    }
}
