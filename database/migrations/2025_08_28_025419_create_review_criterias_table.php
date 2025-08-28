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
        Schema::create('review_criterias', function (Blueprint $table) {
            $table->ulid()->primary();
            $table->foreignUlid('review_id')->references('id')->on('reviews')->nullable(false);
            $table->foreignUlid('review_template_id')->references('id')->on('review_templates')->nullable(false);
            $table->string('criteria_name');
            $table->string('score');
            $table->string('comment');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review_criterias');
    }
};
