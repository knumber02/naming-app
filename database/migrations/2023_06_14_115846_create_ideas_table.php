<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ideas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('main_category');
            $table->string('sub_category')->nullable();
            $table->string('style');
            $table->text('keywords')->nullable();
            $table->text('description')->nullable();
            $table->integer('generation_count')->default(1);
            $table->text('generated_names')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ideas');
    }
};
