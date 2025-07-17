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
            $table->bigInteger('relationships_id')->nullable()->unsigned();
            $table->smallInteger('score')->nullable();
            $table->text('comment');
            $table->index('relationships_id', 'relationships_idx');
            $table->foreign('relationships_id', 'relationships_id_fx')->on('relationships')->references('id');
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
