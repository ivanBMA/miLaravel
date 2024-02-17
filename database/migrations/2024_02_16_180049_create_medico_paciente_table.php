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
        Schema::create('medico_pacientes', function (Blueprint $table) {

            $table->id();

            $table->foreignId('medico_id')->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('paciente_id')->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
          
                // Igual esto no esta correcto (no nullable)
            $table->date('fecha_hora');

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medico_paciente');
    }
};
