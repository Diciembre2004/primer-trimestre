<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    use HasFactory;
    protected $table = 'editoriales';

    // public function editorial(){
    //     return $this->belongsToMany(Autor::class, 'autores_editorial','editorial_id','autor_id')
    // }
}
