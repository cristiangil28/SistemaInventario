<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;
class ProveedorController extends Controller
{
    public function index()
    {
        $proveedores=Proveedor::orderBy('id','DESC')->paginate(3);
        return view('Proveedor.index',compact('proveedores')); 
    }
}
