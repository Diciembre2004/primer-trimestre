<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;
    protected $table = 'autores';

    // public function profesores(){
    //     return $this->belongsToMany(Editorial::class, 'autores_editorial','autor_id','editorial_id')
    // }
}

