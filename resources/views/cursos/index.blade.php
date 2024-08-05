@extends('layouts.app')

@section('titulo', 'Lista de Diseño')

@section('contenido')
    <br>
    <h3 class="text-center">Listado de diseños disponibles</h3>
    <br>

    <div class='row'>
        @foreach ($course as $diseño)
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img style="height: 200px;  width: 200px" src="{{ Storage::url($diseño->imagen) }}"class="card-img-top mx-auto d-block"alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $diseño->nombre }}</h5>
                        <p class="card-text">{{ $diseño->descripcion }}</p>
                        <a href="/cursos/{{$diseño->id}}"class="btn btn-success">Ver detalles</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
