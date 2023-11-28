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
        Schema::create('servicio', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_cliente')->unsigned();
            $table->enum('tipo',['cumpleanio', 'aniversario','casamiento','otro']);
            $table->text('detalle');
            $table->text('cant_invitados');
            $table->text('comida');
            $table->text('bebida');
            $table->text('dj');
            $table->date('fecha');
            $table->text('animador');
            $table->timestamps();

            $table->foreign('id_cliente')->references('id')->on('cliente')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicio');
    }
};
