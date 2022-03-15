@extends('layouts.plantillabase');

@section('contenido')

<h2>Editar Registros</h2>
<form action="/articulos/{{ $articulo->id}}" method="POST">
    @csrf
    @method('PUT')
<div class="mb-3">
    <label for="" class="form-label">Codigo</label>
    <input type="text" id="codigo" name="codigo" class="form-control" value="{{$articulo->codigo}}" tabindex="1">
</div>
<div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input type="text" id="descripcion" name="descripcion" class="form-control" value="{{$articulo->descripcion}}" tabindex="2">
</div>
<div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input type="number" id="cantidad" name="cantidad" class="form-control" value="{{$articulo->cantidad}}" tabindex="3">
</div>
<div class="mb-3">
    <label for="" class="form-label">Precios</label>
    <input type="number" id="precio" name="precio" class="form-control" value="{{$articulo->precio}}" tabindex="4">
</div>
<a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="Submit" class="btn btn-primary">Guardar</button>
</form>
@endsection