@extends('layouts.app')

@section('title','Editorial')

@section('content')

    <h1>Lista de editoriales</h1>

    <a href="{{route('editoriales.create')}}">Cargar nuevo editor</a>

    <table>
        <tr>
            <th>Editoriales</th>
        </tr>
            @foreach ($editorial as $item)
                <tr>
                    <td>{{ $item['name']}}</td>
                </tr>
            @endforeach
    </table>
@endsection