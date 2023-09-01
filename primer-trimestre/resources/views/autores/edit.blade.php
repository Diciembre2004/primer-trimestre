@extends('layouts.app')

@section('title', 'Autor')

@section('content')

<h1>Editar Autor</h1>

    <form action="{{ route('autores.update', $autor) }}" method="POST">
        @csrf
        @method('PATCH')
        @include('autores._partials.campos-form')

    </form>
    <a href="{{ route('autores.index') }}">Regresar</a>




    @endsection