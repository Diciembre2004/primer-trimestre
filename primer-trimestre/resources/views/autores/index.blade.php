@extends('layouts.app')

@section('title','Autor')

@section('content')

    <h1>Lista de autores</h1>

    <a href="{{route('autores.create')}}">Cargar nuevo autor</a>

    {{-- <table>
        <tr>
            <th>Autores</th>
        </tr>
            @foreach ($autor as $item)
                <tr>
                    <td>{{ $item['name']}}</td>
                </tr>
            @endforeach
    </table>


    <th>Accion</th>

<td><a href="{{ route('autores.edit', $item) }}">Editar</a></td> --}}



<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Autor</th>
            <th>Pais</th>
            <th>Accion</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($autor as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->pais }}</td>
                <td><a href="{{ route('autores.edit', $item) }}">Editar</a></td>
            </tr>
        @endforeach
    </tbody>


</table>



@endsection