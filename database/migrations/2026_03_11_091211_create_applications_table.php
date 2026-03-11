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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();

            $table->foreignId('student_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->foreignId('group_internships_id')
                ->constrained('group_internships')
                ->cascadeOnDelete();

            $table->foreignId('companies_id')
                ->constrained('companies')
                ->cascadeOnDelete();

            $table->dateTime('created_at');

            $table->foreignId('status_id')
                ->constrained('applic_status')
                ->cascadeOnDelete();

            $table->text('motivation_letter')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
