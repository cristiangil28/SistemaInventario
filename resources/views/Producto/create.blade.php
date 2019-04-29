@extends('layaout.layaout')
@section('content')


			<div class="container">
					@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Error!</strong> Revise los campos obligatorios.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif
				<div class="panel-heading">
					<h3 class="panel-title " style="text-align:center">Nuevo Producto</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('producto.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
                                        <input type="text" name="nombre_producto" id="nombre" class="form-control input-sm" 
                                        placeholder="Nombre del producto" value="{{ old('nombre_producto') }}" required="true" >
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
                                        <input type="number" name="precio" id="precio" class="form-control input-sm" 
										placeholder="Precio" required="true" value="{{ old('precio') }}">
										<p></p>
									</div>
								</div>
							</div>
                       
							<div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                    <input type="number" name="cantidad" id="cantidad" class="form-control input-sm" 
                                                    placeholder="Cantidad" required="true" value="{{ old('cantidad') }}">
                                            </div>
                                        </div> 
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
                                        <input type="text" name="numero_lote" id="nlote" class="form-control input-sm" 
                                        placeholder="Número de lote" required="true" value="{{ old('numero_lote') }}">
									</div>
                                </div>
                            </div>  
                                <div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
                                        <input type="date" name="fecha_caducidad" id="fecha_caducidad" class="form-control input-sm" 
                                        placeholder="Fecha de Caducidad" required="true" value="{{ old('fecha_caducidad') }}">
									</div>
								</div>
                            
                            <div class="col-xs-6 col-sm-6 col-md-6">
							<div class="form-group">
                                    <select id="proveedor_id" name="proveedor_id" class="form-control" required="true">
                                           
                                            @foreach($proveedores as $proveedor)
                                            <option value="{{ $proveedor['id'] }}">{{ $proveedor['nombre'] }}</option>
                                            @endforeach
                                     </select>
                            </div>
                            </div>
                        </div>
							<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('producto.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	

							</div>
						</form>
					</div>
				</div>

			</div>
</div>
	@endsection