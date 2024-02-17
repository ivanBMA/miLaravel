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
        //
        Schema::table('consulta_medicas', function (Blueprint $table) {

            //Referenciamos a la id de la tabla medicos
            $table->unsignedBigInteger('medicos_id')->unsigned()->after("id");        
            $table->foreign('medicos_id')->references('id')->on('medicos')->onUpdate('cascade')->onDelete('cascade');
            
            //Referenciamos a la id de la tabla pacientes
            $table->unsignedBigInteger('pacientes_id')->unsigned()->after("id");        
            $table->foreign('pacientes_id')->references('id')->on('pacientes')->onUpdate('cascade')->onDelete('cascade');
           
        });

        // Schema::table('consulta_medicas', function (Blueprint $table) {
        //     $table->unsignedBigInteger('pacientes_id')->unsigned()->after("id");        
        //     $table->foreign('pacientes_id')->references('id')->on('pacientes')->onUpdate('cascade')->onDelete('cascade');
           
        
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('pacientes', function (Blueprint $table) {
            $table->dropForeign('medicos_id_foreign');
            $table->dropColumn('medicos_id');
        });

        //probar
        Schema::table('consulta_medicas', function (Blueprint $table) {
            $table->dropForeign('pacientes_id_foreign');
            $table->dropColumn('pacientes_id');

        });
    }
};
