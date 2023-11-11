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
        Schema::create('task_takens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('detail_enrolled_course_id')->constrained('detail_enrolled_courses')->onDelete('cascade');
            $table->text('answer')->nullable();
            $table->text('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_takens');
    }
};
