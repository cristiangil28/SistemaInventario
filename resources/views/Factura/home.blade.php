@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Dashboard.{{auth()->user()}}</div>
            <a href="{{route('factura.index')}}">Listado facturas</a>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                     @foreach($facturas as $factura)  
                            <p>{{$factura}}</p>

                     @endforeach
                    You are logged in!
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection