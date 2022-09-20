@extends('client.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Consultar Clientes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('client.index') }}"> Volver</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $client->nombre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apelldio:</strong>
                {{ $client->apellido }}
            </div>
        </div>
        div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIT:</strong>
                {{ $client->nit }}
            </div>
        </div>
    </div>
@endsection