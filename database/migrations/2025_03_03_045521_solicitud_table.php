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
            $table->foreignId("epp_id")->constrained()->onDelete("cascade");
            $table->foreignId("sede_id")->constrained()->onDelete("cascade");
            $table->foreignId("area_id")->constrained()->onDelete("cascade");
            $table->integer("cantidad");
            $table->string("state")->default('Pendiente');
            $table->foreignId("aprobado_por_id")->nullable()->constrained("users")->onDelete("cascade");
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
