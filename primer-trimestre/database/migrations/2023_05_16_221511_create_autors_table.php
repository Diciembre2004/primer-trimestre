<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void //php artisan migrate:fresh --seed para actualizar
    {
        Schema::create('autores', function (Blueprint $table) {
            $table->id();
            $table->string('name',80);
            //$table->string('nacionalidad',80); //nacionalidad
            // $table->date('Fecha de Nacimiento'); //->nullable()//;
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autores'); //puse autores en vez de autoras, cambiar si algo sale mal
    }
};
