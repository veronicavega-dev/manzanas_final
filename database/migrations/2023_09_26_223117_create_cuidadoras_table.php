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
        Schema::create('cuidadoras', function (Blueprint $table) {
            $table->id();
            $table->string('tipoDoc');
            $table->string('documento');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('correo');
            $table->string('ciudad');
            $table->string('direccion');
            $table->string('ocupacion');
            $table->string('servicioInteres');
            $table->foreignId('servicio_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuidadoras');
    }
};
