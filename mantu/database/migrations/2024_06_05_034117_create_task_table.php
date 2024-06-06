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
        Schema::create('task', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('deadline');
            $table->text('description');
            // foreign key
            $table->unsignedBigInteger('status_id')->nullable();
            $table->unsignedBigInteger('categories_id')->nullable();
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->foreign('categories_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task');
    }
};
