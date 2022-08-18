@extends('layouts.master')
@section('title','Agrgar Productos')
@section('header')
@parent
<div class="container">
    <div class="row">
        <div class="col-12">
            <br><h1>Productos</h1><hr><br>
        </div>
    </div>
</div>
    
@stop

@section('content')
<div class="container">
<div class="row">
        <div class="col-12">

            <form action="{{ url('/productos/{id}')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nombe producto</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>         
                <div class="mb-3">
                    <label for="image" class="form-label">Imagen</label>
                    <input type="text" class="form-control" id="image" name="image">
                </div>  
                <div class="mb-3">
                    <label for="coduni" class="form-label">CodigoProducto</label>
                    <input type="text" class="form-control" id="coduni" name="coduni">
                </div>                
                <div class="mb-3">
                    <label for="categoria" class="form-label">Indique si el Producto es Perecible o No Perecible</label>
                    <input type="text" class="form-control" id="categoria" name="categoria">
                </div> 
                <div class="mb-3">
                    <label for="desc" class="form-label">Descripcion de Sucursal</label>
                    <textarea name="desc" id="desc" cols="30" rows="10" class="form-control"></textarea>     
                </div>
                <div class="mb-3">
                    <label for="cantidad" class="form-label">Cantidad de Productos</label>
                    <input type="text" class="form-control" id="cantidad" name="cantidad">
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio Producto</label>
                    <input type="text" class="form-control" id="precio" name="precio">
                </div>
                
                <button type="submin" class="btn btn-primary">Crear Sucursal</button>
            </form>
        </div>
    </div>

</div>
   
@stop



@section('footer')
<div class="container">
    <div class="row">
        <div class="col-12">
            <br>
            <a href="/sucursales" type="button" class="btn btn-secondary"> Volver</a>
            <br>
        </div>
    </div>
</div>
@parent

@stop