@extends('layouts.app')

@section('titulo', 'Detalle diseño')

@section('contenido')

<div class='text-center'>
    <img style="height: 400px; width: 500px; margin: 20px;" src="{{ Storage::url($diseño->imagen) }}" class='card-img-top mx-auto d-block' alt='...'>
    <div class='card-body'>
        <p class="card-text">{{ $diseño->descripcion }}</p>
        <div>
            <a href="/diseño/{{ $diseño->id }}/edit" class="btn btn-dark">Editar curso</a>
        </div>
    </div> <!-- Cierre de div.card-body -->
</div> <!-- Cierre de div.text-center -->

@endsection
