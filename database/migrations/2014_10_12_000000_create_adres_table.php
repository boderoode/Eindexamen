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
        Schema::create('adres', function (Blueprint $table) {
            //fill with straatnaam plaats provincie postcode huisnummer
            $table->id();
            $table->string('straatnaam');
            $table->string('plaats');
            $table->string('provincie');
            $table->string('postcode');
            $table->integer('huisnummer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
