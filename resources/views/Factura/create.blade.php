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
					<h3 class="panel-title " style="text-align:center">Crear Factura</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('factura.update',$producto->id) }}"  role="form">
								<input type="hidden" name="_method" value="PUT">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<label for="">Cliente</label>
                                        <input type="text" name="user_id" id="nombre" class="form-control input-sm" 
									required="true" value="{{auth()->id()}}" readonly>
									
									</div>
								</div>

								<div class="col-xs-6 col-sm-6 col-md-3">
										<label for="">Producto</label>
									<div class="form-group">
                                        <input type="text" name="producto_id" id="producto_id" class="form-control input-sm" 
									required="true" value="{{$producto->id}}"readonly>
										<p></p>
									</div>
								</div>
							</div>
                       
							<div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                            <div class="form-group">
													<label for="">Precio por unidad</label>
                                                    <input type="number" name="precio" id="precio" class="form-control input-sm" 
													value="{{$producto->precio}}" readonly>
                                            </div>
                                        </div> 
								<div class="col-xs-6 col-sm-6 col-md-3">
									<div class="form-group">
											<label for="">Cantidad a comprar</label>
                                        <input type="number" name="cantida" id="cantidad" class="form-control input-sm" 
										placeholder="cantidad a comprar" required="true"
										onkeyup="calcularTotal();">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-3	">
										<label for="">Total a pagar</label>
										<div class="form-group">
											<input type="number" name="total" id="total" class="form-control input-sm" 
											placeholder="Total a pagar" required="true">
										</div>
									</div>
                            </div>  
                                <div class="row">
								
                            
                            <div class="col-xs-6 col-sm-6 col-md-4">
							<div class="form-group">
								
									<textarea name="descripcion" id="" cols="30" rows="5" required
									placeholder="descripción"></textarea>
                            </div>
                            </div>
                        </div>
							<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-9">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('producto.index') }}" class="btn btn-info btn-block" >Cancelar</a>
								</div>	

							</div>
								
						</form>
					</div>
				</div>

			</div>
</div>
	<script>
	function calcularTotal()
	{
	document.getElementById("total").value =document.getElementById("precio").value* document.getElementById("cantidad").value;
	}
	</script>
	@endsection