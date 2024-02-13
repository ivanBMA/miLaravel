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
        Schema::table('pacientes', function (Blueprint $table) {
            $table->unsignedBigInteger('cobertura_medica_id')->unsigned()->after("id");        
            $table->foreign('cobertura_medica_id')->references('id')->on('coberturas_medicas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pacientes', function (Blueprint $table) {
            $table->dropForeign('cobertura_medica_id_foreign');
            $table->dropColumn('cobertura_medica_id');
        });
    }
};
