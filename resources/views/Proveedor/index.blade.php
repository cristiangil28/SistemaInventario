@extends('Layaout.layaout')
@section('content')
  <section class="container">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
            <div class="col-xs-10 col-sm-10 col-md-4">
                <a href="{{ route('proveedor.create') }}" class="btn btn-info btn-block" >Nuevo Proveedor</a>
              </div>
              <br>
          <div class="pull-left"><h3>Lista de Proveedores</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <!--<a href="" class="btn btn-info" >Añadir Libro</a>-->
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Teléfono</th>
             </thead>
             <tbody>
              @if($proveedores->count())  
              @foreach($proveedores as $proveedor)  
              <tr>
                <td>{{$proveedor->nombre}}</td>
                <td>{{$proveedor->telefono}}</td>
                <!--<td><a class="btn btn-primary btn-xs" href="" ><span class="glyphicon glyphicon-pencil"></span></a></td>-->
                
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