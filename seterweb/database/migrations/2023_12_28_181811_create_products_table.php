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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 30)->nullable(false);
            $table->string('especificacionesMaterial', 80)->nullable(true);
            $table->string('especificacionesConexiones', 80)->nullable(true);
            $table->string('especificacionesRangos', 80)->nullable(true);
            $table->string('especificacionesTemperatura', 80)->nullable(true);
            $table->string('especificacionesPeso', 80)->nullable(true);
            $table->string('normasAplicables', 120)->nullable(true);
            $table->string('modelo', 60)->nullable(false);
            $table->string('categoria', 40)->nullable(false);
            $table->text('imagen')->nullable(false);
            $table->string('caracteristicas', 120)->nullable(false);
            $table->integer('cantidad')->nullable(false);
            $table->enum('marca', ['SETER','WIKA','PARKER','FLUKE','DEWIT','FINETEK']) -> nullable(false) -> default('SETER');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
