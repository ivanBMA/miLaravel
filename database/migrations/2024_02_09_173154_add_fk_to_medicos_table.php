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
        Schema::table('medicos', function (Blueprint $table) {
            $table->unsignedBigInteger('especialidad_id')->unsigned()->after("id");        
            $table->foreign('especialidad_id')->references('id')->on('especialidads')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('medicos', function (Blueprint $table) {
            $table->dropForeign('especialidad_id_foreign');
            $table->dropColumn('especialidad_id');
        });
    }
};
