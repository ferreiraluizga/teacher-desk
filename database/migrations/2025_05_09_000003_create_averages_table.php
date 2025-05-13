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
        Schema::create('averages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
            $table->decimal('participation', 4, 2);
            $table->decimal('book', 4, 2);
            $table->decimal('extra_job', 4, 2);
            $table->decimal('pratical_class', 4, 2);
            $table->decimal('final_exam', 4, 2);
            $table->decimal('recovery_exam', 4, 2);
            $table->enum('period', ['1st', '2nd', '3rd', '4th']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('average');
    }
};
