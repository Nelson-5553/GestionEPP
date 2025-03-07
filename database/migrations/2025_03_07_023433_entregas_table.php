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
        Schema::create('entregas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('solicitud_id')->constrained()->onDelete('cascade');
            $table->string("state")->default('Pendiente');
            $table->time('start_time_labor')->nullable();
            $table->time('end_time_labor')->nullable();
            $table->text('observations')->nullable();
            $table->timestamps();
        });

        // DB::statement("ALTER TABLE entrega ADD COLUMN signature BYTEA");

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
