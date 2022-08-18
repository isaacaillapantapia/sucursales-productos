@extends('layouts.master')
@section('title','Mis agregados')
@section('header')
@parent
<br>
<div class="container">
    <div class="row">
        <div class="col-12">
          <h1>Crear Sucursal</h1> <hr>
        </div>
    </div>
</div>
    
@stop

@section('content')
<div class="container">
    <div class="row">
        <form action="{{ url('/sucursales')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombe Sucursal</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>   
            <div class="mb-3">
                <label for="image" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="image" name="image" accept=".jpg, .png, .jpeg">
            </div>         
            <div class="mb-3">
                <label for="desc" class="form-label">Descripcion de Sucursal</label>
                <textarea name="desc" id="desc" cols="30" rows="10" class="form-control"></textarea>     
                </div>
            <div class="mb-3">
            <select for="name_sucursal" class="form-select" aria-label="Default select example" id="name_sucursal" name="name_sucursal">
                <option selected>Ubicacion Sucursales Disponibles</option>
                <option value="1">Maipu</option>
                <option value="2">Lo Barnechea</option>
                <option value="3">Estacion Central</option>
            </select>
            </div>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                    @endforeach   
                </ul>
            </div>                                                     
            @endif  
            <button type="submin" class="btn btn-primary">Crear Sucursal</button>
        </form>
    </div>
    
</div>
    
@stop
@section('footer')
<div class="container">
    <div class="row">
        <div class="col-12">
        <br>
        <a href="/sucursales" type="button" class="btn btn-secondary"> Volver</a>
        </div>
    </div>
</div>



@parent

@stop