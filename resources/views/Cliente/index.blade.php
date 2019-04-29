@extends('Layouts.app')
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
          <div class="pull-left"><h3>Lista clientes</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <!--<a href="" class="btn btn-info" >Añadir Libro</a>-->
            </div>
          </div>
        
          <div class="table-container">
           
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Apellido</th>
               <th>Cédula</th>
               <th>Teléfono</th>
             </thead>
             <tbody>
              @if($clientes->count())  
              @foreach($clientes as $cliente)  
              <tr>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->apellido}}</td>
                <td>{{$cliente->cedula}}</td>
                <td>{{$cliente->telefono}}</td>
                
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>

          </table>
          {{auth()->user()->email}}
        </div>
      </div>
    </div>
  </div>
</section>

@endsection