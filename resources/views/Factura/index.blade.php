@extends('Layaout.layaout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
        @if(Session::has('success'))
        <div class="alert alert-info">
          {{Session::get('success')}}
        </div>
        @endif
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Productos</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <!--<a href="" class="btn btn-info" >Añadir Libro</a>-->
            </div>
          </div>
          <div class="table-container">
           
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Precio</th>
               <th>cantidad</th>
               <th>N° Lote</th>
               <th>Fecha de caducidad</th>
               <th>Proveedor</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($productos->count())  
              @foreach($productos as $producto)  
              <tr>
                <td>{{$producto->nombre_producto}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->cantidad}}</td>
                <td>{{$producto->numero_lote}}</td>
                <td>{{$producto->fecha_caducidad}}</td>
                <td>{{$producto->proveedor->nombre}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('ProductoController@edit', $producto->id)}}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                    <form action="{{action('ProductoController@destroy', $producto->id)}}" method="post">
                     {{csrf_field()}}
                     <input name="_method" type="hidden" value="DELETE">
  
                     <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                   </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection