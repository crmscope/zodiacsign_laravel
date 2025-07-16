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
        Schema::create('relationships_news', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('relationships_id')->nullable();
            $table->smallInteger('score')->nullable();
            $table->text('comment');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relationships_news');
    }
};
