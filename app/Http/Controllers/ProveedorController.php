<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests\ProveedorRequest;
use App\Proveedor;
class ProveedorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $proveedores=Proveedor::orderBy('id','DESC')->paginate(3);
        return view('Proveedor.index',compact('proveedores')); 
    }
    public function create()
    {
        
        return view('Proveedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProveedorRequest $request)
    {
        
        Proveedor::create($request->all());
        return redirect()->route('proveedor.index')->with('success','Registro creado satisfactoriamente');
    }
}
