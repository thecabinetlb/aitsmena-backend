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
        Schema::create('whitepapers', function (Blueprint $table) {
            $table->id();
            $table->string('cover');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('summary');
            $table->string('attachment');
            $table->json('tags')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->boolean('is_gated')->default(false);
            $table->boolean('is_featured')->default(true);
            $table->boolean('is_arabic')->default(false);
            $table->unsignedBigInteger('publication_type_id')->nullable();
            $table->unsignedBigInteger('industry_id')->nullable();
            $table->timestamps();

            // Foreign key constraint for category_id
            $table->foreign('publication_type_id')->references('id')->on('publication_types')->onDelete('set null');
            $table->foreign('industry_id')->references('id')->on('industries')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('whitepapers');
    }
};
