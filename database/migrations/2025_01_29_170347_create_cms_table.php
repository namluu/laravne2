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
        Schema::create('cms_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url')->unique();
            $table->boolean('enabled')->default(1);
            $table->timestamps();
        });

        Schema::create('cms_articles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url')->unique();
            $table->boolean('enabled')->default(1);
            $table->foreignId('user_id')->constrained();
            $table->foreignId('category_id')->constrained('cms_categories');
            $table->text('content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cms_categories');
        Schema::dropIfExists('cms_articles');
    }
};
