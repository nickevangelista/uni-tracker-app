<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('prerequisites', function (Blueprint $table) {
            $table->id();
            $table->string('subject_id'); //materia restrita
            $table->integer('required_subject_id'); //materia que é pré-requisito
            $table->string('type')->default('prerequisite'); // 'prerequisite' ou 'corequisite'
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prerequisites');
    }
};
