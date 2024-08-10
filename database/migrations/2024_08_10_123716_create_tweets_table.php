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
        Schema::create('tweets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('handle');
            $table->string('image');
            $table->text('tweet');
            $table->string('file')->nullable();
            $table->boolean('is_video')->nullable();
            $table->unsignedInteger('comments')->default(0);
            $table->unsignedInteger('retweets')->default(0);
            $table->unsignedInteger('likes')->default(0);
            $table->unsignedInteger('analytics')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tweets');
    }
};
