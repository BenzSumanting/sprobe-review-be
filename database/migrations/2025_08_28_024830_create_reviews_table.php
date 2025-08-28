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

        Schema::create('review_templates', function (Blueprint $table) {
            $table->ulid()->primary();
            $table->string('template_name');
            $table->string('description');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('reviews', function (Blueprint $table) {
            $table->ulid()->primary();
            $table->foreignUlid('employee_id')->references('id')->on('employees')->nullable(false);
            $table->foreignUlid('reviewer_id')->references('id')->on('users')->nullable(false);
            $table->date('review_date');
            $table->text('overall_comment');
            $table->integer('status');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
        Schema::dropIfExists('review_templates');
    }
};
