@extends('layouts.master')
@section('title','Mis Producctos }}')
@section('header')
@parent
<div class="container">
    <div class="row">
        <div class="col-12">
            <br>
            @if(isset($sucursal))
                <h2>Listado de Productos de bodega {{ $sucursal[0]->name }}</h2>
            @else
                <h2>Resultado Busqueda {{$search}}</h2>
            @endif
            <br>
        </div>
    </div>
</div>

@stop

@section('content')
<div class="container">
    <div class="row">
    @foreach( $productos as $producto)
        <div class="col-4">
            <div class="card">
                <img src="{{ $producto->image }}" alt="">
                <div class="card-body">
                    <h5 class="card-title"> <b>Nombre:</b> {{ $producto->name }}</h5>
                    <h5 class="card-title"> <b>Codigo Unico:</b> {{ $producto->coduni }}</h5>
                    <h5 class="card-title"> <b>Categoria:</b> {{ $producto->categoria }}</h5>
                    <h5 class="card-title"> <b>Descripcion:</b> {{ Str::limit($producto->desc,15) }}</h5>
                    <h5 class="card-title"> <b>Cantidad de productos:</b> {{ $producto->cantidad }}</h5>
                    <h5 class="card-title"> <b>Precio:</b> {{ $producto->precio }}</h5>
                    <h5 class="card-title"> <b>Sucursal:</b> {{ $producto->sucursal_id }}</h5>
                    <p class="card-text text-muted">{{ \FormatTime::LongTimeFilterCreated($producto->created_at)}}</p>
                    <p class="card-text text-muted">{{ \FormatTime::LongTimeFilter($producto->updated_at)}}</p>
                </div>
                <div class="card-footer">
                    <div class="btn-group" role="group">
                        <a type="button" class="btn btn-danger">Eliminar</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
    
@stop


@section('footer')
<div class="container">
    <div class="row">
        <div class="col-3">
            <br>
            <a href="/productos/create" type="button" class="btn btn-secondary">Agregar Producto</a>
        </div>
    </div>
</div>


@parent

@stop