# Sistema Inventario
sistema de inventario con laravel

El siguiente aplicativo es un sistema de inventario creado con laravel y conectado a una base de datos MYSQL. Para poder utilizarlo debe inicair sesión en el sistema.

creación de proyecto

<pre>
	<code>laravel new SistemaInventario</code>
</pre>


creacion de los modelos

<pre>
	<code>php artisan make:model Producto</code>
</pre>
<pre>
	<code>php artisan make:model Factura</code>
</pre>
<pre>
	<code>php artisan make:model Proveedor</code>
</pre>

creacion de las migraciones

<pre>
	<code>php artisan make:migration productos --create=productos</code>
</pre>
<pre>
	<code>php artisan make:migration facturas --create=facturas</code>
</pre>
<pre>
	<code>php artisan make:migration proveedores --create=proveedores</code>
</pre>

despues de crear las tablas se deben migrar a la base de datos con el siguiente comando:

<pre>
	<code>php artisan migrate</code>
</pre>


se crean los controladores para las tablas que fueron creadas anteriormente

<pre>
	<code>php artisan make:controller NameController</code>
</pre>


luego se crea la lógica para cada uno de los controladores Y dentro de la carpeta viewa que estan dentro de la carpeta resources
creamos 3 carpetas cada una con el nombre de la tabla y dentro de cada carpeta debe de ir los archivos index, create,edit con la extension .blade.php:

<pre>
    <code>
    

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {   
    
        $productos=Producto::orderBy('id','DESC')->paginate(3);
        //return view('Producto.index',compact('productos')); 
        return view('Producto.index')->with('productos', $productos);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores = \App\Proveedor::orderBy('id','DESC')->paginate(3);
        return view('Producto.create')->with('proveedores',$proveedores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Producto::create($request->all());
        return redirect()->route('producto.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto=Producto::find($id);
        return view('Producto.edit',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$this->validate($request,[ 'nombre'=>'required', 'resumen'=>'required', 'npagina'=>'required', 'edicion'=>'required', 'autor'=>'required', 'npagina'=>'required', 'precio'=>'required']);
 
        Producto::find($id)->update($request->all());
        return redirect()->route('producto.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
</code>
    
 </pre>
 
 
 se crean las rutas para cada una de las tablas en el archivo web.php que se encuentra en a carpeta routes:
 
 <pre>
 <code>
Route::resource('producto', 'ProductoController');
Route::resource('proveedor', 'ProveedorController');
Route::resource('factura', 'FacturaController');
Route::resource('cliente', 'ClienteController');</code>
</pre>

                                            USO DEL SISTEMA
                                            
          La imágen de la página principal está en el siguiente link
          
         https://drive.google.com/file/d/1QkVVmL7jDYbMSmNSptEiVbdV7_brOlaq/view
         
         en ella tenemos un menú desplegable llamado inventario, y de el se desprende Productos, facturas y Proveedores.
         
         1. Productos, al presionar nos llevará a la lista de productos domnde podremos crear un nuevo producto, editarlo y crear una 
            factura; al presionar en crear factura nos va a llevar a un formulario donde se carga predeterminadamente el id del producto 
            del cual vamos a crear, el usuario que es la persona que esta logueada, la cantidad que hay disponble del producto, el 
            precio, el total y la descripción.
            en el campo total va a mostrar el total según la cantidad que ingresemos esta se va a mostrar en el campo total
            gracias a un evento que se encuentra en el campo cantidad el cual va a campturar lo que se digite en este campo y va 
            llamr a una función JS que va a calcular el total, al presionar en crear factura la cantidad que se ingreso se va descontar 
            de la tabla producto.
            
          2. el segundo link del menú es Facturas el cuál va a mostrar la lista de facturas que se han generado
          3. el tercer link es Proveedor que nos va a redireccionar a vista que contiene la lista de proveedores, además de permitornos
          crear un nuevo Proveedor.
