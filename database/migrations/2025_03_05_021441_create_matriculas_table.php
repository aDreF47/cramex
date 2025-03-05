<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('dni', 8)->unique();
            $table->string('correo')->unique();
            $table->string('telefono');
            $table->string('grado');
            $table->string('documento'); // Ruta del archivo subido
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('matriculas');
    }
};
