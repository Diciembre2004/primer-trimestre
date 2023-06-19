@extends('layouts.app')
@section('title', 'Editorial')
@section('content')
    <h1>Alta de autores</h1>

    <form action="{{route('editoriales.store')}}" method="POST">
    @csrf
    <label>
        Nombre <br>
        <input name="nombre" type="text"> <br>
    </label>
    {{-- <label>
        DNI <br>
        <input name="dni" type="text"> <br>
    </label> --}}
    <button type="submit">Grabar</button> <br>
</form>

    <a href="{{route('editoriales.index')}}">Regresar</a>
@endsection