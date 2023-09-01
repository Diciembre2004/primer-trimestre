<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;
    protected $table = 'autores';

    protected $fillable = ['name', 'country'];

    protected $guarded = ['id', 'create_at', 'update_at'];
}

