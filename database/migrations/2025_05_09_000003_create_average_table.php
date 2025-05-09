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
        Schema::create('average', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('student')->onDelete('cascade');
            $table->decimal('participation', 2, 2)->nullable();
            $table->decimal('book', 2, 2)->nullable();
            $table->decimal('extra_job', 2, 2)->nullable();
            $table->decimal('pratical_class', 2, 2)->nullable();
            $table->decimal('final_exam', 2, 2)->nullable();
            $table->decimal('recovery_exam', 2, 2)->nullable();
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
