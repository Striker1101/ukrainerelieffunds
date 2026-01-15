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
    Schema::create('donations', function (Blueprint $table) {
        $table->id();
        $table->string('slug')->unique();
        $table->string('title');
        $table->decimal('donation', 10, 2);
        $table->decimal('goal', 10, 2);
        $table->unsignedBigInteger('category_id');
        $table->text('content_one');
        $table->text('content_two');
        $table->string('sub_topic')->nullable();
        $table->text('content_three')->nullable();
        $table->text('content_four')->nullable();
        $table->text('content_five')->nullable();
        $table->text('content_six')->nullable();
        $table->text('content_seven')->nullable();
        $table->string('image')->nullable();
        $table->string('image_one')->nullable();
        $table->string('image_two')->nullable();
        $table->timestamps();

        $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
