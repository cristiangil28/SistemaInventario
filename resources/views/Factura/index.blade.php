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
          <div class="pull-left"><h3>Listado de facturas</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <!--<a href="" class="btn btn-info" >Añadir Libro</a>-->
            </div>
          </div>
          <div class="table-container">
           
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Usuario</th>
               <th>Producto</th>
               <th>descripción</th>
               <th>precio</th>
               <th>cantidad</th>
               <th>total</th>
             </thead>
             <tbody>
              @if($facturas->count())  
              @foreach($facturas as $factura)  
              <tr>
                <td>{{$factura->usuario->name}}</td>
                <td>{{$factura->producto_id}}</td>
                <td>{{$factura->descripcion}}</td>
                <td>${{$factura->precio}}</td>
                <td>{{$factura->cantidad}}</td>
                <td>${{$factura->total}}</td>
                
                <td>
                    
  
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