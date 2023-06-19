@extends('layouts.app')

@section('title','Autor')

@section('content')

    <h1>Lista de autores</h1>

    <a href="{{route('autores.create')}}">Cargar nuevo autor</a>

    <table>
        <tr>
            <th>Autores</th>
        </tr>
            @foreach ($autor as $item)
                <tr>
                    <td>{{ $item['name']}}</td>
                </tr>
            @endforeach
    </table>
@endsection