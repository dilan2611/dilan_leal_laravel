@extends('layouts.app')

@section('titulo', 'Editar curso')

@section('contenido')
    <br>
    <h3 class="text-center">Editar información del Curso</h3>
    {{--se utiliza el atributo enctype para poder subir archivos--}}
    <form action="{{ route('cursos.update', $course->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="nombrecurso">Modifique el Nombre del curso</label>
            <input name="nombre" id="nombrecurso" value="{{$course->nombre}}" type="text" class="form-control @error('nombre') is-invalid @enderror">
            @error('nombre')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="descripcion">Modifique la Descripción del curso</label>
            <input name="descripcion" id="descripcion" value="{{$course->descripcion}}" type="text" class="form-control @error('descripcion') is-invalid @enderror">
            @error('descripcion')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="imagen">Cargar nueva imagen</label>
            <br>
            @if($course->imagen)
                <img src="{{ asset('imagenes/cursos/'. $course->imagen) }}" alt="Imagen del curso" width="100">
            @endif
            <input name="imagen" id="imagen" type="file" class="form-control @error('imagen') is-invalid @enderror">
            @error('imagen')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <br>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
@endsection
