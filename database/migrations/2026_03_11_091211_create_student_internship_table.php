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
        Schema::create('student_internship', function (Blueprint $table) {
            $table->id();

            $table->foreignId('student_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->foreignId('group_internships_id')
                ->constrained('group_internships')
                ->cascadeOnDelete();

            $table->date('start_date');
            $table->date('end_date');

            $table->foreignId('companies_id')
                ->constrained('companies')
                ->cascadeOnDelete();

            $table->foreignId('inter_status_id')
                ->constrained('inter_status')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_internship');
    }
};
