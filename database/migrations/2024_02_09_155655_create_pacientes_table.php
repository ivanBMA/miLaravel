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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            //$table->integer('cobertura_medica_id', 200);
            $table->string('nombre',200);
            $table->string('apellido',200);
            $table->string('tipo_doc',200);
            $table->string('nro_doc',200);
            $table->date('fecha_nac');
            $table->timestamps();

           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
