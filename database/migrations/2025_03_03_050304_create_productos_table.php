<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('IdProducto'); // Clave primaria
            $table->string('NombreProducto', 255); // Nombre del producto
            $table->text('Descripcion')->nullable(); // Descripción del producto
            $table->decimal('Precio', 10, 2); // Precio con dos decimales
            $table->integer('Stock')->default(0); // Cantidad en stock
            $table->timestamps(); // Fechas de creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
