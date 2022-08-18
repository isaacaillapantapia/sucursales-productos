@extends('layouts.master')
@section('title','Mis Sucursales')
@section('header')
@parent
<div class="container">
    <div class="row">
        <div class="col-12">
            <br>
            <h1>Sucursales Creadas</h1>
            <br>
        </div>
        <hr>
    </div>
</div>
    <br>
@stop

@section('content')
<div class="container">
<div class="row ">
        @foreach( $sucursales as $sucursal)
        <div class="col-3">
            <div class="card">
            @if(Storage::disk('imagenes')->has($sucursal->image))
                <img src="{{ url('miniatura/'.$sucursal->image)}}" alt="$sucursal->image">
            @else
                <img src="{{ $sucursal->image }}" alt="{{ $sucursal->name }}">
            @endif
                <div class="card-body">
                    <h5 class="card-title"><b>Nombre:</b> {{ $sucursal->name }}</h5>
                    <h5 class="card-title"><b>Cantidad de Productos:</b> {{ $sucursal->name_sucursal }}</h5>
                    <h5 class="card-title"><b>Descripcion:</b> {{ Str::limit($sucursal->desc,50) }}</h5>
                    <p class="card-text text-muted">{{ \FormatTime::LongTimeFilterCreated($sucursal->created_at)}}</p>
                    <p class="card-text text-muted">{{ \FormatTime::LongTimeFilter($sucursal->updated_at)}}</p>
                </div>
                     <div class="card-footer">
                    <div class="btn-group" role="group">
                        <a type="button" class="btn btn-danger">Eliminar</a>
                        <a href="/productos/{{ $sucursal->id }}" type="button" class="btn btn-success">Productos</a>                    
                </div>
                </div>
               
            </div>
        </div>
        @endforeach
    </div>
@stop
@section('footer')
<br>
<a href="/sucursales/create" type="button" class="btn btn-secondary"> Crear Sucursal</a>
<br>

</div>
    


@parent

@stop