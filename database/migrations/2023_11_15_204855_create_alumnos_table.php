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
        Schema::create('alumno', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',20);
            $table->string('apellido',20);
            $table->string('dni',11);
            $table->string('telefono',20);
            $table->string('legajo',20);
            $table->string('estado',20);
            $table->foreignId('carrera_id')->constrained('carrera')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumno');
    }
};
