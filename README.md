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


