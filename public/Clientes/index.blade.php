@extends('client.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ingreso de Clientes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Ingrese Nuevo Cliente</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $client->nombre }}</td>
            <td>{{ $client->apelldio }}</td>
            <td>
                <form action="{{ route('client.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('client.show',$product->id) }}">Ver</a>
    
                    <a class="btn btn-primary" href="{{ route('client.edit',$product->id) }}">Mod</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $client->links() !!}
      
@endsection