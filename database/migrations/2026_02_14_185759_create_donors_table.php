<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email');
            $table->decimal('amount', 10, 2);
            $table->enum('mode', ['online', 'offline']);
            $table->string('option')->nullable(); // bitcoin, usdt, etc
            $table->unsignedBigInteger('donation_id'); // relation to donations
            $table->timestamps();

            $table->foreign('donation_id')
                ->references('id')
                ->on('donations')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('donors');
    }
};
