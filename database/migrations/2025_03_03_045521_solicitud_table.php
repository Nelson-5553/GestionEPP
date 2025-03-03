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
        Schema::create("solicituds", function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->foreignId("user_id")->constrained();
            $table->foreignId("epp_id")->constrained();
            $table->foreignId("sede_id")->constrained();
            $table->foreignId("area_id")->constrained();
            $table->text("cantidad");
            $table->string("state")->nullable();
            $table->integer("aprobado_por_id")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
