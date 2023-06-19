<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;
class AutorController extends Controller
{
    public function index(){
        $autor = Autor::all();
        return
view('autores.index',compact('autor'));
    }
    public function create(){
    return view('autores.create');
    }
    public function store(Request $request){
        $autor = new Autor;
        $autor->name = $request->input('nombre');
        //$autor->dni = $request->input('dni');
        $autor->save();
        return 'fin';
    }
}