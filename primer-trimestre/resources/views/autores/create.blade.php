@extends('layouts.app')
@section('title', 'Autor')
@section('content')
    <h1>Alta de autores</h1>

    <form action="{{route('autores.store')}}" method="POST"> {{--cambio create a store--}}
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

    <a href="{{route('autores.index')}}">Regresar</a>
@endsection