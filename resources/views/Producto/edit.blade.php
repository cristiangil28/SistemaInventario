@extends('Layaout.layaout')
@section('content')

	<section class="container">
		<div class="col-md-8 col-md-offset-2">
			
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Actualizar Producto</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
                            <form method="post" action="{{ route('producto.update',$producto->id) }}"  role="form">
                                <input type="hidden" name="_method" value="PUT">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label >Nombre producto</label>
                                                <input type="text" name="nombre_producto" id="nombre" class="form-control input-sm" 
                                            required="true" value="{{$producto->nombre_producto}}">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label >Precio</label>
                                                <input type="number" name="precio" id="precio" class="form-control input-sm" 
                                            required="true" value="{{$producto->precio}}">
                                            </div>
                                        </div>
                                    </div>
                               
                                    <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                            <label >Cantidad</label>
                                                            <input type="number" name="cantidad" id="cantidad" class="form-control input-sm" 
                                                    required="true" value="{{$producto->cantidad}}">
                                                    </div>
                                                </div> 
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                    <label >Número de lote</label>
                                                <input type="text" name="numero_lote" id="nlote" class="form-control input-sm" 
                                            required="true" value="{{$producto->numero_lote}}" readonly>
                                            </div>
                                        </div>
                                    </div>  
                                        <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                    <label >Fecha de Caducidad</label>
                                                <input type="date" name="fecha_caducidad" id="fecha_caducidad" class="form-control input-sm" 
                                            required="true" value="{{$producto->fecha_caducidad}}" >
                                            </div>
                                        </div>
                                    
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                            <label >Proveedor</label>
                                            <input type="text" name="proveedor_id" id="proveedor_id" class="form-control input-sm" 
                                            required="true" value="{{$producto->proveedor->id}}" readonly>{{$producto->proveedor->nombre}}
                                    </div>
                                    </div>
                                </div>
                                    <div class="row">
        
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <input type="submit"  value="Actualizar" class="btn btn-success btn-block">
                                            <a href="{{ route('producto.index') }}" class="btn btn-info btn-block" >Atrás</a>
                                        </div>	
        
                                    </div>
                                </form>
					</div>
				</div>

			</div>
		</div>
	</section>
	@endsection