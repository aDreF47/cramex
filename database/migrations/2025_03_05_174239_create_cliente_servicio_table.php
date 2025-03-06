<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('ClienteServicio', function (Blueprint $table) {
            $table->id('idClienteServicio');
            $table->unsignedBigInteger('idCliente');
            $table->unsignedBigInteger('idServicio');
            $table->date('FechaInicio');
            $table->date('FechaFin');
            $table->decimal('Costo', 10, 2)->default(0);
            $table->json('Captura')->nullable();
            $table->decimal('Penalidad', 10, 2)->default(0);
            $table->boolean('FlagPago')->default(0);

            // Claves foráneas
            $table->foreign('idCliente')->references('idCliente')->on('Cliente')->onDelete('cascade');
            $table->foreign('idServicio')->references('IdServicio')->on('Servicio')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ClienteServicio');
    }
};
