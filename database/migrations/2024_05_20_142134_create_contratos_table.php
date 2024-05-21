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
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('propiedad_id');
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('agente_id');
            $table->string('tipo_contrato');
            $table->date('fecha_contrato');
            $table->text('detalles')->nullable();
            $table->timestamps();

            $table->foreign('propiedad_id')->references('id')->on('propiedades');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('agente_id')->references('id')->on('agentes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratos');
    }
};
