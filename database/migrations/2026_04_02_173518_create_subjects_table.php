<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('credits');
            $table->integer('hours');
            $table->integer('suggested_semester')->nullable(); // Nulo para as seletivas
            $table->string('type')->default('mandatory'); // 'mandatory' ou 'elective'
            $table->integer('minimum_credits_required')->default(0); // Créditos mínimos exigidos para cursar a disciplina
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
