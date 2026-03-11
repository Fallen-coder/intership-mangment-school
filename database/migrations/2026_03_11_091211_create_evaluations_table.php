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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('student_internship_id')
                ->constrained('student_internship')
                ->cascadeOnDelete();

            $table->foreignId('grader_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->string('grade_value',4);
            $table->string('comment',45)->nullable();
            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
