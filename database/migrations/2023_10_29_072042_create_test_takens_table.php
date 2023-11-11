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
        Schema::create('test_takens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('detail_enrolled_course_id')->constrained('detail_enrolled_courses')->onDelete('cascade');
            $table->foreignId('question_id')->constrained('test_questions')->onDelete('cascade');
            $table->integer('answer_a')->default(0);
            $table->integer('answer_b')->default(0);
            $table->integer('answer_c')->default(0);
            $table->integer('answer_d')->default(0);
            $table->integer('score')->default(0);
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_takens');
    }
};
