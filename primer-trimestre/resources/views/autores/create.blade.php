@extends('layouts.app')
@section('title', 'Autor')
@section('content')
    <h1>Alta de autores</h1>

    <form action="{{route('autores.store')}}" method="POST"> {{--cambio create a store--}}
    @csrf
    @include('autores._partials.campos-form')
</form>

    <a href="{{route('autores.index')}}">Regresar</a>
@endsection