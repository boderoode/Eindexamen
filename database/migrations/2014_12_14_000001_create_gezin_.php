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
        Schema::create('gezin', function (Blueprint $table) {
            $table->id();
            $table->string('gezin_naam');
            $table->integer('aantal_volwassenen');
            $table->integer('aantal_kinderen');
            $table->integer('aantal_babys');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
