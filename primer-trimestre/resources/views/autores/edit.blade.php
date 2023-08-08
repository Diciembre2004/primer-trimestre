@extends('layouts.app')

@section('title', 'Autor')

@section('content')

<h1>Editar Autor</h1>

    <form action="{{ route('autores.update', $autor) }}" method="POST">
        @csrf
        @method('PATCH')
        <label>
            Nombre <br>
            <input name="name" type="text" value="{{ old('name', $autor->name) }}"> <br>
        </label>
        <label>
            Pais <br>
            <input name="pais" type="text" value="{{ old('pais', $autor->pais) }}"> <br>
        </label>
        <button type="submit">Grabar</button> <br>
    </form>
    <a href="{{ route('autores.index') }}">Regresar</a>

    @endsection