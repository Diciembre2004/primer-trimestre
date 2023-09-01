<?php

namespace App\Http\Controllers;


use App\Http\Requests\SaveAutorRequest;
use Illuminate\Http\Request;
use App\Models\Autor;


class AutorController extends Controller
{
    public function index()
    {
        $autor = Autor::all();
        return view('autores.index',compact('autor'));

    }

// para crear -----------------------------
    public function create(Autor $autor)
    {
    return view('autores.create',compact('autor'));
    }

    public function store(SaveAutorRequest $request)
    {

        Autor::create($request->validated());

        return to_route('autores.index')->with('status', 'autor creado');
    }

// para editar -----------------------------
    public function edit(Autor $autor)
    {
        return view('autores.edit', compact('autor'));
    }

// para actualizar -----------------------------
    public function update(SaveAutorRequest $request, Autor $autor)
    {

        $autor->update($request->validated());

        return to_route('autores.index')->with('status', 'autor actualizado');
    }
// para borrar ------------------------------------------
    public function delete(Autor $autor)
    {
        $autor->delete();

        return to_route('autores.index')->with('status', 'autor eliminado!');
    }
}