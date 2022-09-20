@extends('client.layout')
  
@section('content')
<div class="row">
    <div>
        <div>
            <h4>Add New Product</h4>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Volver</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Error al Ingresar su dato.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('client.store') }}" method="POST">
    @csrf
  
     <div class="form-reg">
        <div >
            <div >
                <strong>Nombre:</strong>
                
                <input class="controls" type="text" name="name" id="name" placeholder="Ingrese Nombre de Cliente">
            </div>
        </div>
        <div>
            <div>
                <strong>Apellidos:</strong>
                <input class="controls" type="text" name="apellidoC" id="apellidoC" placeholder="Ingrese Apellido de Cliente">
            </div>
        </div>
        <div>
            <div>
                <strong>NIT:</strong>
                <input class="controls" type="text" name="nitC" id="nitC" placeholder="Ingrese NIT del Cliente">
            </div>
        </div>
        <div>
                <button type="submit" class="botons">Registar</button>
        </div>
    </div>
   
</form>
@endsection