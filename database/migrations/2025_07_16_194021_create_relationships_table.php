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
        Schema::create('relationships', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('zodiac_signs_one')->nullable()->unsigned();
            $table->bigInteger('zodiac_signs_two')->nullable()->unsigned();
            $table->index('zodiac_signs_one', 'zodiac_signs_one_idx');
            $table->index('zodiac_signs_two', 'zodiac_signs_two_idx');
            $table->foreign('zodiac_signs_one', 'zodiac_signs_one_fx')->on('zodiac_signs')->references('id');
            $table->foreign('zodiac_signs_two', 'zodiac_signs_two_fx')->on('zodiac_signs')->references('id');    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relationships');
    }
};
