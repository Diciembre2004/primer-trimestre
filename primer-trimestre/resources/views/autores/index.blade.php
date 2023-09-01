@extends('layouts.app')

@section('title', 'Autor')

@section('content')

    <h1>Lista de autores</h1>

    <a href="{{ route('autores.create') }}">Cargar nuevo autor</a>

    <table>
        <thead>
            <tr>
                <th>Autor</th>
                <th>Pais</th>
                <th>Accion</th>
            </tr>
        </thead>

        <tbody>
            {{-- para editar --}}
            @foreach ($autor as $item)
                <tr>
                    {{-- <td>{{ $item->id }}</td> --}}
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->country }}</td>
                    <td><a href="{{ route('autores.edit', $item) }}">Editar</a></td>
                    
                    {{-- para borrar --}}
                    <td>
                    <form action="{{ route('autores.delete', $item) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Borrar</button>
                    </form>
                    </td>

                </tr>
            @endforeach

        </tbody>


    </table>



@endsection
