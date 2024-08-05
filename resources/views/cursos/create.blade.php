@extends('layouts.app')

@section('titulo','Crear Curso')

@section('contenido')

<h3>crear nuevo diseño</h3>
<form action="/cursos" method="post" enctype="multipart/form-data" >
    @csrf

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre de diseño</label>
                <input type="text" class="form-control" id="nombre " name="nombre_del_diseño">
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción de diseño</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion_de_diseño">
            </div>
            <div
             class="form-group">
                <label for="imagen">cargar imagen</label>
                <br>

                <input name="imagen" id="imagen" type="file">

        </div>
<br>
    </div>
    <button type="submit" class="btn btn-primary">Agregar</button>
</form>

@endsection
