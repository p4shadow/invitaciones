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
        Schema::create('invitacion', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_cliente')->unsigned();
            $table->enum('tipo_reunion',['cumpleanio', 'aniversario','casamiento','otro']);
            $table->text('anios');
            $table->date('fecha_evento');
            $table->time('hr_inicio');
            $table->time('hr_final');
            $table->enum('tema',['granja', 'casamiento','aniversario','halloween']);
            $table->timestamps();

            $table->foreign('id_cliente')->references('id')->on('cliente')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitacion');
    }
};
