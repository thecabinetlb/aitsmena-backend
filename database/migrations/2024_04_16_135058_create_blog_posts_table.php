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
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->string('thumbnail_image')->nullable();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('summary');
            $table->text('body');
            $table->json('tags').nullable();
            $table->timestamp('published_at')->nullable();
            $table->boolean('isPublished')->default(false);
            $table->boolean('isFeatured')->default(false);
            $table->boolean('isArabic')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
