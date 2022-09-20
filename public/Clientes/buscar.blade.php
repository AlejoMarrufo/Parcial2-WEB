@extends('client.layout')
  
@section('content')
<form action="{{ route('client.store') }}" method="POST">
    <section class="form-reg">
        <h4>Registro de Clientes</h4>
        <input class="controls" type="text" name="consulC" id="consulC" value="{{ $client->nombre }}" placeholder="Ingrese Nombre de Cliente que desea Buscar">
        <input class="controls" type="TextArea" name="Resultado" id="Resultado" value="{{ $client->apellido }}" placeholder="Aca se mostrara su Consulta">        
        <br>
        <input class="botons" type="submit" value="Consultar">
        <p>Ingrese nombre de Cliente</p>        
    </section>
</form>

@endsection