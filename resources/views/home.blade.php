@extends('Layaout.layaout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align:center;">Sistema de Inventario</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <img src="{{ asset('imagenes/sistemadeinventario.png') }}" alt="" class="rounded mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
