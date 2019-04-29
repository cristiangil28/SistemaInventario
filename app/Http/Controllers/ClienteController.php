<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $clientes=Cliente::orderBy('id','DESC')->paginate(3);
        //return view('Producto.index',compact('productos')); 
        return view('cliente.index',compact('clientes'));
    }
}
