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
					<h3 class="panel-title " style="text-align:center">Nuevo Proveedor</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('proveedor.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
                                        <input type="text" name="nombre" id="nombre" class="form-control input-sm" 
                                        placeholder="Nombre del proveedor" required="true" value="{{ old('nombre') }}">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
                                        <input type="text" name="telefono" id="telefono" class="form-control input-sm" 
										placeholder="ingrese telefono de contacto" required="true" value="{{ old('telefono') }}">
										<p></p>
									</div>
								</div>
							</div>
                       
							
							<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('proveedor.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	

							</div>
						</form>
					</div>
				</div>

			</div>
</div>
	@endsection