<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use Illuminate\Http\Request;
class EditorialController extends Controller
{
    public function index(){
        $editorial = Editorial::all();
        return
view('editoriales.index',compact('editorial'));
    }
    public function create(){
    return view('editoriales.create');
    }
    public function store(Request $request){
        $editorial = new Editorial;
        $editorial->name = $request->input('nombre');
        //$autor->dni = $request->input('dni');
        $editorial->save();
        return 'fin';
    }
}
