<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trackers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('subject_id')->constrained()->cascadeOnDelete();

            $table->string('status')->default('pending'); // 'pending', 'in_progress', 'completed'
            $table->string('priority')->default('medium'); // 'low', 'medium', 'high'
            $table->integer('difficulty')->default(3); // 1 a 5, onde 1 é fácil e 5 é difícil
            $table->boolean('offered_this_semester')->default(true); // Indica se a disciplina está sendo oferecida no semestre atual
            $table->timestamps();

            $table->unique(['user_id', 'subject_id']); // Garante que um usuário não possa ter a mesma disciplina mais de uma vez no tracker
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trackers');
    }
};
